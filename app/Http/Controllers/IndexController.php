<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $title = 'MapBiomas Indonesia - Fire';
        $description = "Inisiatif MapBiomas Fire dimulai sejak 2023, bersama sembilan jaringan organisasi masyarakat sipil (CSO) yang dikoordinasi oleh Auriga Nusantara dan Woods and Wayside International (WWI). MapBiomas Fire memetakan kebakaran menggunakan teknologi komputasi yang didukung algoritma machine learning dan deep learning.";
        return view('frontends.index', compact('title', 'description'));
    }
}
