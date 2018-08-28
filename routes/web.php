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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagina1', function () {
    return view('pagina1',
    [
        'name' => 'Camilo Guerrero',
        'phone' => '3215193127',
        'email' => 'sebasguerrero27@gmail.com'
    ]
);
});

Route::get('/pagina2/{num}', function ($num) {
    return view('pagina2',
    [
        'num' => $num
    ]
);
});
