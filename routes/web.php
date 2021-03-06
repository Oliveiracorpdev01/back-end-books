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
    return view('welcome');
});


Route::get('/login', function () {
    $credentials =[
        'email'=>'ukris@example.net',
        'password'=>'password',
    ];

    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();

        return auth()->user();
    }

    abort(401);    

});

Route::get('/users', function () {
    return \App\Models\User::all();
})->middleware(middleware:'auth:sanctum');

