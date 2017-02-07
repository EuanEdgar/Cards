<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home(){
    	return view('welcome');
    }

    public function about(){
		$people = ['Justin', 'Chris', 'Matt'];

		return view('pages.about', compact('people'));//resources/views/pages/about.blade.php
    }
}
