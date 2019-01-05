<?php

namespace App\Http\Controllers\Entry;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\User;
use App\Http\Model\UserToken;

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
	


		//check email is exist

		$existUser = User::where('email',$request->email)->first();

		if($existUser){
			return response([
				'status' => 'error',
				'error' => 'User already exist in our system'
			],400);
		}



		$user = new User();
		$user->full_name = $request->full_name;
		$user->email = $request->email;
		$user->password = $request->password;

		$savedUser = $user->save();

		if($savedUser){

			$userToken = new UserToken();
			$token = time();
			$userToken->user_id = $user->id;
			$userToken->token = $token;
			$userToken->save();
			
			$user->token = $token;

			return response([
				'status' => 'success',
				'user' => $user
			],200);
		}

		return response([
			'status' => 'error',
			'error' => 'Error While adding user to the system'
		],400);


		
	}



}
