<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return '<h1>hello laravel</h1>';
});

Route::get('/about', function () {    
    return '<h2>about page</h2>';
});

// Route::get('/store', function () {
//     $category = request('category');
//     return strip_tags($category).'용 스토어 페이지를 보고 있습니다.';
// });

Route::get('/store', function () {
    $category = request('category');

    if(isset($category)){
        return '스토어 페이지에서 '.strip_tags($category).' 카테고리를  보고 있습니다.';
    }
    return '스토어 페이지의 모든 제품을 보고 있습니다.';
});
