<?php

namespace App\Http\Controllers\Admin\BlackList;

use App\Entity\Tenant\BlackListComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantCommentsController extends Controller
{

    public function index(Request $request)
    {
        $query = BlackListComment::with(['author', 'author.avatar', 'blackList'])->orderByDesc('status')->orderByDesc('updated_at');


        if (!empty($value = $request->get('id'))) {
            $query->where('id', $value);
        }

        if (!empty($value = $request->get('status'))) {
            $query->where('status', $value);
        }

        if (!empty($request->get('onlyMy'))) {
            $query->where('author_id', Auth::id());
        }

        $comments = $query->paginate(20);

        $statuses = BlackListComment::statusComment();
        return view('admin.black-list-tenant.comments.home', compact('comments', 'statuses'));
    }

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
