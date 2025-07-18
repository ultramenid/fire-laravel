<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function getSelectNews(){
        if (app()->getLocale() == 'id') {
            return 'id, titleID as title, img, slug, descriptionID as description, contentID as content, category';
        } else {
            return 'id, titleEN as title, img, slug, descriptionEN as description, contentEN as content, category';
        }
    }

    public function getDetailNews($id){
        return DB::table('news')
        ->selectRaw($this->getSelectNews())
        ->where('id', $id)
        ->first();
    }



    public function detailnews($locale, $id, $slug){
        // dd($this->relatedRandomNews($id));
        if($this->getDetailNews($id) == null){
            redirect()->route('index', app()->getLocale());
        }
        $title = $this->getDetailNews($id)->title;
        $description = $this->getDetailNews($id)->description;
        $data = $this->getDetailNews($id);
        // dd($data);
        return view('frontends.detailnews', compact('title', 'description', 'data'));
    }

    public function newsnevent(){
        $title = 'MapBiomas Landy - News & Event';
        $description = "Bagian dari gerakan global MapBiomas Network untuk menghasilkan peta tutupan dan penggunaan lahan tahunan.";
        return view('frontends.newsnevent', compact('title', 'description'));
    }
}
