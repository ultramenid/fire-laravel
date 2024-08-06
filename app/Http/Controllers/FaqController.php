<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $title = 'MapBiomas Fire - faq';
        $nav = 'faq';
        return view('backends.faq', compact('title', 'nav'));
    }

    public function add(){
        $title = 'MapBiomas Fire - add faq';
        $nav = 'faq';
        return view('backends.addfaq', compact('title', 'nav'));
    }

    public function edit($id){
        $title = 'MapBiomas Fire - edit faq';
        $nav = 'faq';
        $idFaq = $id;
        return view('backends.editfaq', compact('title', 'nav', 'idFaq'));
    }
}
