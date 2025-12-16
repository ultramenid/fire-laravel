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
    public function listinfographic(){
        $title = 'MapBiomas Landy - Infographics';
        $description = "Bagian dari gerakan global MapBiomas Network untuk menghasilkan peta tutupan dan penggunaan lahan tahunan.";
        return view('frontends.infographics', compact('title', 'description'));
    }
}
