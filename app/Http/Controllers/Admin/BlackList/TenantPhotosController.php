<?php

namespace App\Http\Controllers\Admin\BlackList;

use App\Entity\Tenant\BlackListPhoto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantPhotosController extends Controller
{

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
