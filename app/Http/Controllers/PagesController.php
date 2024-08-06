<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function cmsabout(){
        $title = 'MapBiomas Fire - About';
        $nav = 'pages';
        return view('backends.about', compact('title', 'nav'));
    }
}
