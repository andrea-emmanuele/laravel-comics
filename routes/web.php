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
    return redirect('comics');
});

Route::get('/comics', function () {
    return view('comics');
});

Route::get('/comics/{id}', function ($id) {

    $series = config('series');

    if (!array_key_exists($id-1, $series)) {
        abort(404);
    }

    return view('series', ['id' => $id]);
})->whereNumber('id');
