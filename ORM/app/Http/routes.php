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
use Faker\Factory as Faker;

Route::get('/create', function () {
    /*return view('welcome');*/
    /*return 'Archivo de home';*/

    $faker = Faker::create();

    $user = User::create([
    	'name' => $faker->name,
    	'email' => $faker->email,
    	'password' => bcrypt('1234'),
    	'gender' => $faker->randomElement(['F', 'M']),
    	'biography' => $faker->text(200)
    ]);

    return $user;
});

Route::get('/read/{id}', function ($id) {
	$user = User::find($id);

	return $user;
});

Route::get('/update/{id}', function ($id) {
    $faker = Faker::create();
    $user = User::find($id);

    $user->name = $faker->name;
    $user->gender = 'M';
    $user->biography = 'Usuario editado';

    $user->save();

    return $user;
});

Route::get('/delete/{id}', function ($id) {
	$user = User::find($id);
	$user->delete();

	return 'Usuario eliminado';
});