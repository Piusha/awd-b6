<?php

namespace App\Http\Controllers\Entry;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\User;
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
	
		$user = new User();
		$user->full_name = $request->full_name;
		$user->email = $request->email;
		$user->password = $request->password;

		$status = ($user->save())?'success':'failed';
		return response([
			'status' => $status
		]);
	}
}
