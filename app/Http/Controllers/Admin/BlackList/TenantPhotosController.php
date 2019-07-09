<?php

namespace App\Http\Controllers\Admin\BlackList;

use App\Entity\Tenant\BlackListPhoto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TenantPhotosController extends Controller
{

    public function index (Request $request) {

//        config()->set('database.connections.mysql.strict', false);
//        \DB::reconnect();

//        $photos = BlackListPhoto::with(['author', 'blackList', 'blackList.photos'])->groupBy('black_list_tenant_id')->paginate(15);



        $query = BlackListPhoto::with(['author', 'blackList', 'blackList.photos'])->orderByDesc('black_list_tenant_id')->orderByDesc('status')->orderByDesc('updated_at');

        if (!empty($value = $request->get('id'))) {
            $query->where('id', $value);
        }

        if (!empty($value = $request->get('status'))) {
            $query->where('status', $value);
        }

        $photos = $query->paginate(5);

        $statuses = BlackListPhoto::statusPhoto();
        return view('admin.black-list-tenant.photos.home', compact('photos', 'statuses'));
    }


    public function notMatch(BlackListPhoto $photo) {
        $photo->update([
            'status' => BlackListPhoto::STATUS_NOT_MATCH
        ]);

        return redirect()->back()->with('error', 'Фото не соответствует правилам сайта');
    }

    public function active(BlackListPhoto $photo) {
        $photo->update([
            'status' => BlackListPhoto::STATUS_ACTIVE
        ]);
        return redirect()->back()->with('success', 'Фото подтвержден');
    }
}
