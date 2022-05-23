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
//Main - root
// Route::get('/', function () {
//     return view('home');
// });
route::view('/','home')->name("home");

// route::get('/registrar_juego', function (){
//     return view('registrar_juego');
// }); 
route::view('/registrar_juego','registrar_juego')->name("registrar_juego");

// route::get('/registrar_consola', function (){
//     return view('registrar_consola');
// });
route::view('/registrar_consola','registrar_consola')->name("registrar_consola");

// route::get('/ver_juegos', function (){
//     return view('ver_juegos');
// });
route::view('/ver_juegos','ver_juegos')->name("ver_juegos");

// route::get('/ver_consolas', function (){
//     return view('ver_consolas');
// });
route::view('/ver_consolas','ver_consolas')->name("ver_consolas");