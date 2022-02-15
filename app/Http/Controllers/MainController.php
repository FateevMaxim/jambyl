<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Produser;

class MainController extends Controller
{
    public function index (){

        $data = Actor::withTranslation()
        ->translatedIn(app()->getLocale())
            ->get();
        $producers = Produser::withTranslation()
        ->translatedIn(app()->getLocale())
            ->get();

        return view('includes.main', compact('data', 'producers'));
    }
}
