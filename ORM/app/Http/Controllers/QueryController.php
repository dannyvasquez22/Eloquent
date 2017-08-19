<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class QueryController extends Controller
{
    public function eloquentAll() {
    	$users = User::all();
    	$title = "Todos los usuarios (ALL)";
    	return view('query.methods', compact('title' ,'users'));
    }

    public function eloquentGet($gender) {
    	$users = User::where('gender', '=', $gender)
    			->get();
    	$title = "Lista de usuarios (GET)";
    	return view('query.methods', compact('title' ,'users'));
    }

    public function eloquentGetCustom() {
        $users = User::where('gender', '=', 'F')
                ->get(['id', 'name', 'biography']);
        $title = "Lista de usuarios (GET CUSTOM CON ARRAY)";
        return view('query.methods', compact('title' ,'users'));
    }

    public function eloquentDelete($id) {
        $user = User::find($id);
        $user->delete();
        return view('pages.delete');
    }

    public function eloquentLists() {
        $users = User::orderBy('name', 'ASC')
            ->lists('name', 'id');
        return view('query.lists', compact('users'));
    }

    public function eloquentFirstLast() {
    	$first = User::first();
        $all = User::all();
        $last = $all->last();
    	return view('query.first-last', compact('first', 'last'));
    }
}
