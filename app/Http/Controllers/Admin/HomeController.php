<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    public function index()
    {
        $this->checkAccess(Auth::user());
        return view('admin.home');
    }

    // --- Проверка на администратора
    private function checkAccess(User $user): void
    {
        if (!Gate::allows('admin-panel', $user)) {
            abort(404);
        }
    }
}
