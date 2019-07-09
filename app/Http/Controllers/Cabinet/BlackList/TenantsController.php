<?php

namespace App\Http\Controllers\Cabinet\BlackList;

use App\Entity\Tenant\BlackList;
use App\Http\Requests\Tenant\BlackListRequest;
use App\UseCases\Tenant\BlackListService;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TenantsController extends Controller
{
    private $service;

    public function __construct(BlackListService $service)
    {
        $this->service = $service;
    }


    public function index (Request $request) {

        $query = BlackList::orderByDesc('id')
            ->where('author_id', Auth::id())
            ->orWhere('status', BlackList::STATUS_ACTIVE)
            ->with(['author', 'author.avatar', 'comments', 'files', 'photos']);

        if (!empty($value = $request->get('id'))) {
            $query->where('id', $value);
        }

        if (!empty($value = $request->get('name'))) {
            $query->where('name', 'like', '%' . $value . '%');
        }

        if (!empty($value = $request->get('city'))) {
            $query->where('city', 'like', '%' . $value . '%');
        }

        if (!empty($value = $request->get('status'))) {
            $query->where('status', $value);
        }

        if (!empty($request->get('onlyMy'))) {
            $query->where('author_id', Auth::id());
        }


        $tenants = $query->paginate(10);
        $statuses = BlackList::statusTenant();

        return view('cabinet.black-list-tenant.home', compact('tenants', 'statuses'));

    }

    public function create() {
//        $this->checkAccessAddTenant(Auth::user());
        return view('cabinet.black-list-tenant.create');
    }

    public function show(BlackList $tenant)
    {
        try {
            $this->checkAccess($tenant);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return view('cabinet.black-list-tenant.show', compact('tenant'));
    }

    public function story(BlackListRequest $request)
    {
        try {
            $tenant = $this->service->create(Auth::id(), $request);
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('cabinet.black.list.tenants.show', compact('tenant'))->with('success', 'Запись добавлена');
    }


    // --- Проверка на автора и прова редактирования
    private function checkAccess(BlackList $blackList): void
    {
        if (!Gate::allows('manage-own-black-list', $blackList)) {
            abort(403);
        }
    }

    // --- Проверка на автора и прова редактирования
    private function checkAccessAddTenant(User $user): void
    {
        if (!Gate::allows('manage-add-tenant', $user)) {
            abort(403);
        }
    }

}
