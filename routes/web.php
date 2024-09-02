<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use App\Http\Middleware\checkSession;
use App\Http\Middleware\hasSession;
use App\Http\Middleware\setLanguage;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/id');

Route::middleware([setLanguage::class])->group(function () {
    Route::group(['prefix' => '{lang}'], function () {
        Route::get('/', [IndexController::class, 'index'])->name('index');
        Route::get('/about', [PagesController::class, 'about'])->name('about');
        Route::get('/refrencemap', [PagesController::class, 'refrencemap'])->name('refrencemap');
        Route::get('/termsofuse', [PagesController::class, 'termsofuse'])->name('termsofuse');
        Route::get('/faq', [FaqController::class, 'listfaq'])->name('faq');
        Route::get('/downloads', [PagesController::class, 'downloads'])->name('downloads');
        Route::get('/atbd', [PagesController::class, 'atbd'])->name('atbd');

    });
});


//redirect to login page if user has no session
Route::middleware([checkSession::class])->group(function () {
    Route::get('/cms/dashboard', [DashboardController::class, 'index']);
    Route::get('/cms/listfaq', [FaqController::class, 'index']);
    Route::get('/cms/addfaq', [FaqController::class, 'add']);
    Route::get('/cms/editfaq/{id}', [FaqController::class, 'edit']);
    Route::get('/cms/listnews', [NewsController::class, 'index']);
    Route::get('/cms/addnews', [NewsController::class, 'add']);
    Route::get('/cms/editnews/{id}', [NewsController::class, 'edit']);
    Route::get('/cms/pageabout', [PagesController::class, 'cmsabout']);
    Route::get('/cms/termofuse', [PagesController::class, 'cmstermofuse']);
    Route::get('/cms/cmsatbd', [PagesController::class, 'cmsatbd']);

    Route::group(['prefix' => '/cms/fire-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

});

//redirect to dashboard if user has session to dashboard
Route::middleware([hasSession::class])->group(function () {
    Route::get('/cms/login', [DashboardController::class, 'login']);
});

//url to logout session
Route::get('/cms/logout', function () {
    session()->flush();
    return redirect('/cms/login');
});
