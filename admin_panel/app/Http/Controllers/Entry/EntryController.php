<?php

namespace App\Http\Controllers\Entry;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\User\iUserRepository;

class EntryController extends Controller
{
	//
	
	private $user = null;
	function __construct(iUserRepository $user){

		$this->user = $user;
	}
	public function sign_up(){

		return view('entry.sign-up');
	}

	public function sign_in(){

		return view('entry.sign-in');
	}

	public function doSignUp(Request $request){
	

		if($this->user->getUserByEmail($request->email)){

			return response([
				'status' => 'error',
				'error' => 'User Already exist in the system'
			],400);
		}



		$newUser = $this->user->create($request);

		if(! empty($newUser)) {

			$newUser->token = $this->user->saveToken($newUser);

			return response([
				'status' => 'success',
				'user' => $newUser
			],200);
		}

		return response([
			'status' => 'error',
			'error' => 'Error While adding user to the system'
		],400);
		
	}


	public function doSignIn(Request $request) {
		
		$user = $this->user->getUserByEmail($request->email);
		
		if(! $user){

			return response([
				'status' => 'error',
				'error' => 'Cannot find User in the system'
			],400);
		}


		if($user->password !== $request->password){
			
			return response([
				'status' => 'error',
				'error' => 'Invalid Password'
			],400);
		}

		$user->token = $this->user->saveToken($user);

		return response([
			'status' => 'success',
			'user' => $user
		],200);
	}


	public function getMyProfile(){
		return response([
			'status' => 'success',
			'user' => []
		],200);
	}



}
