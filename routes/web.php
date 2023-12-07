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
})->name('home');;

Route::get('/about', function () {
    
    $about = 'Questo pagina - About';
   
    return view('about', compact('about','go_home'));
})->name('about');

Route::get('/product', function () {
    
    $product = 'Questo pagina - product';
 
    return view('product', compact('product','go_home'));
})->name('product');;
