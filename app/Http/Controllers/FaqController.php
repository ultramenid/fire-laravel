<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

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

    public function getSelect(){
        if (App::getLocale() == 'id') {
            return 'id, questionID as question, answerID as answer';
        }else{
            return 'id, questionEN as question, answerEN as answer';
        }
    }
    public function getFAQ(){
        return DB::table('faq')
                ->selectRaw($this->getSelect())
                ->get();
    }

    public function listFaq(){
        $title = 'MapBiomas Fire - FAQ';
        $description = "Inisiatif MapBiomas Fire dimulai sejak 2023, bersama sembilan jaringan organisasi masyarakat sipil (CSO) yang dikoordinasi oleh Auriga Nusantara dan Woods and Wayside International (WWI). MapBiomas Fire memetakan kebakaran menggunakan teknologi komputasi yang didukung algoritma machine learning dan deep learning.";
        $data = $this->getFAQ();
        return view('frontends.faq', compact('title', 'description', 'data'));
    }
}
