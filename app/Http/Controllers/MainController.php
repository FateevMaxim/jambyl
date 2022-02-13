<?php

namespace App\Http\Controllers;

use App\Models\Actor;

class MainController extends Controller
{
    public function index (){

        $data = Actor::withTranslation()
        ->translatedIn(app()->getLocale())
            ->get();

        return view('includes.main', compact('data', $data));
    }
}
