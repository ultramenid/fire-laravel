<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $title = 'MapBiomas Indonesia - Fire';
        $description = "Inisiatif MapBiomas Fire dimulai sejak 2023, bersama sembilan jaringan organisasi masyarakat sipil (CSO) yang dikoordinasi oleh Auriga Nusantara dan Woods and Wayside International (WWI). MapBiomas Fire memetakan kebakaran menggunakan teknologi komputasi yang didukung algoritma machine learning dan deep learning.";
        $news = $this->getNews();
        $events = $this->getEvent();
        return view('frontends.index', compact('title', 'description', 'news','events'));
    }

    public function selectNews(){
        if (app()->getLocale() == 'id') {
            return 'id, titleID as title, descriptionID as description, img, slug';
        } else {
            return 'id, titleEN as title, descriptionEN as description, img, slug';
        }
    }

     public function getNews(){
        return DB::table('news')
        ->selectRaw($this->selectNews())
        ->where('publishdate', '<', Carbon::now('Asia/Jakarta'))
        ->where('category', 'news')
        ->where('status', 1)
        ->orderBy('publishdate','desc')
        ->take(2)
        ->get();
    }

    public function getEvent(){
        return DB::table('news')
        ->selectRaw($this->selectNews())
        ->where('publishdate', '<', Carbon::now('Asia/Jakarta'))
        ->where('category', 'event')
        ->where('status', 1)
        ->orderBy('publishdate','desc')
        ->take(2)
        ->get();
    }
}
