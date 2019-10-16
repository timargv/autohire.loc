<?php

namespace App\Http\Controllers\Cabinet;

use App\Entity\Cars\Advert\Advert;
use App\Entity\Cars\Advert\Dialog\Dialog;
use App\UseCases\Dialogs\DialogService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DialogController extends Controller
{
    private $service;

    public function __construct(DialogService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $dialogs = Dialog::forUser(Auth::user())->orderByDesc('updated_at')->paginate(15);
        return view('cabinet.dialogs.index', compact('dialogs'));
    }

    public function create(Advert $carAdvert)
    {
        return view('cabinet.dialogs.create', compact('carAdvert'));
    }

    public function show (Dialog $dialog)
    {
        return view('cabinet.dialogs.show', compact('dialog'));
    }



}
