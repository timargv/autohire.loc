<?php

namespace App\Http\Controllers\Admin\BlackList;

use App\Entity\Tenant\BlackListComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantCommentsController extends Controller
{

    public function notMatch(BlackListComment $comment) {
        $comment->update([
            'status' => BlackListComment::STATUS_NOT_MATCH
        ]);

        return redirect()->back()->with('error', 'Комментарий не соответствует правилам сайта');
    }

    public function active(BlackListComment $comment) {
        $comment->update([
            'status' => BlackListComment::STATUS_ACTIVE
        ]);
        return redirect()->back()->with('success', 'Комментарий подтвержден');
    }
}
