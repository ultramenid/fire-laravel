<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfographicController extends Controller
{
    public function index(){
        $title = 'MapBiomas Fire - Infographic';
        $nav = 'infographic';
        return view('backends.listinfographic', compact('title', 'nav'));
    }

     public function addinfographic()
    {
        $title = 'MapBiomas Landy - Add Infographic';
        $nav = 'infographic';
        return view('backends.addinfographic', compact('title', 'nav'));
    }

    public function edit($id){
        $title = 'MapBiomas Landy - edit mural';
        $nav = 'infographic';
        $idInfographic = $id;
        return view('backends.editInfographic', compact('title', 'nav', 'idInfographic'));
    }
}
