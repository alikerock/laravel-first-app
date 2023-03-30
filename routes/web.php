<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
    // return '<h1>hello laravel</h1>';
});

Route::get('/about', function () {    
    return view('about');
});

Route::get('/contact', function () {    
    return view('contact');
});

Route::get('/store/{category?}/{item?}', function ($category=null, $item=null) {

    if(isset($category)){
        if(isset($item)){
            return '스토어 페이지에서'.$category.'내'.$item.' 카테고리를 보고 있습니다.';
        }
        return '스토어 페이지에서'.$category.' 카테고리를 보고 있습니다.';
    }
    return '스토어 페이지의 모든 제품을 보고 있습니다.';
});
