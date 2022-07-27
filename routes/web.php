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
    $comics = config("comics");

    return view('home', [
        'comics' => $comics
    ]);
});

Route::get("/comics", function () {
    $comics = config("comics");

    return view("home", [
        "comics" => $comics
    ]);

})->name("comics");

Route::get("/comics/{id}", function ($id) {
    $comics = config("comics");

    $foundComic = null;

    foreach ($comics as $i => $comic) {
        if ($comic["id"] === intval($id)) {
            $foundComic = $comic;
            break;
        }
    }

    if (is_null($foundComic)) {
        abort("404");
    }

    return view(
        "comicDetails",
        [
            "comic" => $foundComic
        ]
    );
})->name("comicDetails");