<?php

namespace App\Http\Controllers\Admin\User;

use App\Entity\User\Avatar;
use App\UseCases\Auth\RegisterService;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AvatarsController extends Controller
{
    private $register;

    public function __construct(RegisterService $register)
    {
        $this->register = $register;
        $this->middleware('can:manage-users');
    }


    public function index(Request $request) {

        $query = Avatar::orderByDesc('id')->with('author');

        if (!empty($value = $request->get('id'))) {
            $query->where('id', $value);
        }

        if (!empty($value = $request->get('status'))) {
            $query->where('status', $value);
        }

        $avatars = $query->paginate(20);

        $statuses = Avatar::statusAvatar();

        return view('admin.users.avatars.home', compact('avatars', 'statuses'));
    }

    public function notMatch(Avatar $avatar) {
        $avatar->update([
            'status' => Avatar::STATUS_NOT_MATCH
        ]);

        return redirect()->back()->with('error', 'Фото не соответствует правилам сайта');
    }

    public function active(Avatar $avatar) {
        $avatar->update([
            'status' => Avatar::STATUS_ACTIVE
        ]);
        return redirect()->back()->with('success', 'Фото подтверждено');
    }
}
