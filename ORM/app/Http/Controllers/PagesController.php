<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home() {
    	$users = User::orderBy('id', 'DESC')
    		->take(10)
    		->get();
    	return view('pages.home', compact('users'));
    }
}
