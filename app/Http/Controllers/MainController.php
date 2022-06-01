<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Newslatter;
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
        $newslatters = Newslatter::withTranslation()
        ->translatedIn(app()->getLocale())
            ->orderBy('id', 'DESC')
            ->get();

        return view('includes.main', compact('data', 'producers', 'newslatters'));
    }

    public function getArticle($id) {
        $newslatter = Newslatter::where('id', $id)->withTranslation()
            ->translatedIn(app()->getLocale())
            ->get();
        $newslatters = Newslatter::withTranslation()
            ->translatedIn(app()->getLocale())
            ->get();
        return view('includes.article', compact( 'newslatter', 'newslatters'));
    }
}
