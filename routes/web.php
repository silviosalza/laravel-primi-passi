<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $page_title = "Welcome to laravel";
    $data = [
        'title' => $page_title,
        'students' =>[
            'Mario Rossi',
            'Antonio Rocco',
            'Luigi Bianchi'
        ],
        'teachers'=>[
            'Olga Demina'
        ]
    ];
    return view('welcome', $data);
});

Route::get('/about', function(){
    return view('about');
});
