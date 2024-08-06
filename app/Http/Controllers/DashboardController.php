<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function login(){
        $title = 'MapBiomas Fire - Login';
        return view('backends.login', compact('title'));
    }

    public function index(){
        $title = 'MapBiomas Fire - Dashboard';
        $nav = 'dashboard';
        return view('backends.dashboard', compact('title', 'nav'));
    }
}
