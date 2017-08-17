<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\User;

Route::get('/create', function () {
    /*return view('welcome');*/
    /*return 'Archivo de home';*/
    $user = User::create([
    	'name' => 'Danny Vasquez',
    	'email' => 'dani22_vr@hotmail.com',
    	'password' => bcrypt('1234'),
    	'gender' => 'M',
    	'biography' => 'Curso eloquen basico'
    ]);

    return 'Usuario guardado';
});

Route::get('/update', function () {
    $user = User::find(1);

    $user->gender = 'M';
    $user->biography = 'Curso eloquent basico';

    $user->save();

    return 'Usuario actualizado';
});
