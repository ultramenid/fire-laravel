<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $title = 'MapBiomas Fire - News';
        $nav = 'news';
        return view('backends.listnews', compact('title', 'nav'));
    }

    public function add(){
        $title = 'MapBiomas Fire - add news';
        $nav = 'news';
        return view('backends.addnews', compact('title', 'nav'));
    }

    public function edit($id){
        $title = 'MapBiomas Fire - edit news';
        $nav = 'news';
        $idNews = $id;
        return view('backends.editnews', compact('title', 'nav', 'idNews'));
    }
}
