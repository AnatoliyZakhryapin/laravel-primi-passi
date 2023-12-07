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
    // $data = [
    //     'title' => 'Hello World'
    // ];
    // return view('home', $data);
    
    $title = 'Hello World';
    
    return view('home', compact('title'));
});

Route::get('/about', function () {
    
    $about = 'Questo pagina - About';
    $go_home = 'Go at Home';
    return view('about', compact('about','go_home'));
});

Route::get('/product', function () {
    
    $product = 'Questo pagina - product';
    $go_home = 'Go at Home';
    return view('product', compact('product','go_home'));
});
