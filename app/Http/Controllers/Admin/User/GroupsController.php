<?php

namespace App\Http\Controllers\Admin\User;

use App\Entity\User\Group;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class GroupsController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:manage-users');
    }

    public function index()
    {
        $groups = Group::all();
        return view('admin.users.groups.index', compact('groups'));
    }


    public function create()
    {
        return view('admin.users.groups.create');
    }


    public function store(Request $request)
    {
        $this->checkAccess(Auth::user());
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        Group::create([
            'name' => $request['name'],
            'author_id' => Auth::id(),
            'slug'  => Str::slug($request['name'])
        ]);

        return redirect()->route('admin.users.groups.index')->with('success', 'Группа добавлена');
    }


    public function show($id)
    {
        //
    }


    public function edit(Group $group)
    {
        $this->checkAccess(Auth::user());
        return view('admin.users.groups.edit', compact('group'));
    }


    public function update(Request $request, Group $group)
    {
        $this->checkAccess(Auth::user());
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        $group->update([
            'name' => $request['name'],
            'author_id' => Auth::id(),
            'slug'  => Str::slug($request['name'])
        ]);

        return redirect()->route('admin.users.groups.index')->with('success', 'Группа обновлена');
    }


    public function destroy(Group $group)
    {
        $this->checkAccess(Auth::user());
        $group->users()->delete();
        $group->delete();

        return redirect()->back()->with('success', 'Группа Удалена');
    }


    // --- Проверка на администратора
    private function checkAccess(User $user): void
    {
        if (!Gate::allows('admin', $user)) {
            abort(403);
        }
    }
}
