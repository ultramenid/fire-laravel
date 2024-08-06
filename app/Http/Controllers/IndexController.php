<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $title = 'MapBiomas Indonesia - Fire';
        $description = "";
        return view('frontends.index', compact('title', 'description'));
    }
}
