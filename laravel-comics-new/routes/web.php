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
    $data = ['comics' => config('comics'), 'nomePagina'=> 'DC Comics - Home'];
    return view('guest.home', $data);
})->name('home');

Route::get('/characters', function(){
    return view('guest.characters');
})->name('characters');

Route::get('/videos', function(){
    return view('guest.videos');
})->name('videos');

Route::get('/games', function(){
    return view('guest.games');
})->name('games');

Route::get('/tv', function(){
    return view('guest.tv');
})->name('tv');

Route::get('/shop', function(){
    return view('guest.shop');
})->name('shop');

Route::get('/fans', function(){
    return view('guest.fans');
})->name('fans');

Route::get('/collectibles', function(){
    return view('guest.collectibles');
})->name('collectibles');

Route::get('/movies', function(){
    return view('guest.movies');
})->name('movies');

Route::get('/news', function(){
    return view('guest.news');
})->name('news');


Route::get('comic/{id}', function($id){
    $collection = collect(config('comics'));
    $comic = $collection->where('id', $id);
    $singleComic = '';
    foreach($comic as $value){
        $singleComic = $value;
    }
    return view('guest.comic', [
        'comic'=> $singleComic,
        'nomePagina'=> $singleComic['title'],
    ]);
})->name('comic');