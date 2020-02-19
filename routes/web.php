<?php

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

use App\Artist;
use App\Songs;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', function () {
    return view('mytemplate');
});


Route::get('/sampledata/{count}', function ($count) {

    $artist =factory(App\Songs::class)->times($count)->create();

});

Route::get('/artists', function () {

    $allArtists=\App\Artist::all();
    //dd($allArtists);
    return view('artist',compact('allArtists'));
    
});

Route::get('/songs', function () {
    

    $allSongs=\App\Songs::all();
    //dd($allSongs);
    return view('songs',compact('allSongs'));
    
});

