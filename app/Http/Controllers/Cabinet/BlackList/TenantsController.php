<?php

namespace App\Http\Controllers\Cabinet\BlackList;

use App\Entity\Tenant\BlackList;
use App\Http\Requests\Tenant\BlackListPhotoRequest;
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
            $this->checkAccessActive($tenant);
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

        return redirect()->route('cabinet.black.list.tenants.photos', $tenant)->with('success', 'Запись добавлена');
    }


    // ------ Форма добавления фотографий для Объявления
    public function photosForm (BlackList $tenant) {
        $this->checkAccess($tenant);
        return view('cabinet.black-list-tenant.form.photo', compact('tenant'));
    }


    // ------ Добавить одну или несколько Фотографий для объявления
    public function photos (BlackListPhotoRequest $request, BlackList $tenant)
    {
        $blackList = $this->getBlackList($request['blackList']);
        $this->checkAccess($blackList);
        try {
            $fileName = $this->service->addPhoto(Auth::id(), $request, $blackList->id);
        } catch (\DomainException $e) {
            return response()->json(['error', $e->getMessage()]);
        }

        return response()->json(['success'=> $fileName]);
    }


    // --- Проверка на автора и прова редактирования
    private function checkAccess(BlackList $blackList): void
    {
        if (!Gate::allows('manage-own-black-list', $blackList)) {
            abort(403);
        }
    }

    // --- Проверка на автора и прова редактирования
    private function checkAccessActive(BlackList $blackList): void
    {
        if (!Gate::allows('manage-black-list-active', $blackList)) {
            abort(403);
        }
    }

    private function getBlackList($id) {
        return BlackList::findOrFail($id);
    }

}
