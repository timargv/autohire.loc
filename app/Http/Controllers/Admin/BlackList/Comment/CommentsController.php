<?php

namespace App\Http\Controllers\Admin\BlackList\Comment;

use App\Entity\Tenant\BlackListComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{

    public function index()
    {
        $comments = BlackListComment::with(['author', 'author.avatar'])->paginate(20);
        return view('admin.black-list-tenant.comments.home', compact('comments'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
