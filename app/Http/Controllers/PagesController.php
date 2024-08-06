<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function cmsabout(){
        $title = 'MapBiomas Fire - About';
        $nav = 'pages';
        return view('backends.about', compact('title', 'nav'));
    }

    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, contentID as content';
        }else{
            return 'id, contentID as content';
        }
    }

    public function getPageData(){
        return DB::table('pageabout')
                ->selectRaw($this->getSelect())
                ->where('id', 1)
                ->first();
    }

    public function about(){
        $title = 'Mapbiomas Fire - About';
        $description = "Inisiatif MapBiomas Fire dimulai sejak 2023, bersama sembilan jaringan organisasi masyarakat sipil (CSO) yang dikoordinasi oleh Auriga Nusantara dan Woods and Wayside International (WWI). MapBiomas Fire memetakan kebakaran menggunakan teknologi komputasi yang didukung algoritma machine learning dan deep learning.";
        $data = $this->getPageData();
        return view('frontends.about', compact('description', 'title', 'data'));
    }

    public function refrencemap(){
        $title = 'Mapbiomas Fire - Refrence Map';
        $description = "Inisiatif MapBiomas Fire dimulai sejak 2023, bersama sembilan jaringan organisasi masyarakat sipil (CSO) yang dikoordinasi oleh Auriga Nusantara dan Woods and Wayside International (WWI). MapBiomas Fire memetakan kebakaran menggunakan teknologi komputasi yang didukung algoritma machine learning dan deep learning.";
        return view('frontends.refrencemap', compact('title', 'description'));
    }

    public function termsofuse(){
        $title = 'Mapbiomas Fire - Termsofuse';
        $description = "Inisiatif MapBiomas Fire dimulai sejak 2023, bersama sembilan jaringan organisasi masyarakat sipil (CSO) yang dikoordinasi oleh Auriga Nusantara dan Woods and Wayside International (WWI). MapBiomas Fire memetakan kebakaran menggunakan teknologi komputasi yang didukung algoritma machine learning dan deep learning.";
        return view('frontends.termsofuse', compact('title', 'description'));
    }
}
