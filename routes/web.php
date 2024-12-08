<?php

use App\Models\Artist;
use App\Models\Album;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/food', function () {
    return view('food');
});


Route::get('/artists', [ArtistController::class, 'index']);

Route::get('/artists/{id}', [ArtistController::class, 'show'])
    ->name('artists.show');

Route::get('/artists/{album}', function ($album) {
    return view('artists', ['artists'=>$album]);
});

Route::get('/albums', [AlbumController::class, 'index']);

Route::get('/albums/{id}', [AlbumController::class, 'show']);

Route::get('/albums/{song}', function ($song) {
    return view('albums', ['albums'=>$song]);
});
