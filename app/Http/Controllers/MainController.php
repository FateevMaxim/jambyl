<?php

namespace App\Http\Controllers;

use App\Models\Actors;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index (){

        $data = Actors::all();
        return view('includes.main', compact('data', $data));
    }
}
