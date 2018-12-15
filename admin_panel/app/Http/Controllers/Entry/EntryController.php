<?php

namespace App\Http\Controllers\Entry;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EntryController extends Controller
{
	//
	
	public function sign_up(){

		return view('entry.sign-up');
	}

	public function sign_in(){

		return view('entry.sign-in');
	}

	public function doSignUp(Request $request){
	
		return response($request->all());
	}
}
