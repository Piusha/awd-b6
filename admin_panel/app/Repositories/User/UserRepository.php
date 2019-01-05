<?php
namespace App\Repository\User;

use Illuminate\Http\Request;
use \Exception;
use App\Http\Model\User;
use App\Http\Model\UserToken;


class UserRepository implements iUserRepository{

	

	public function create(Request $request){

		try{
			
			$user = new User();
			$user->full_name = $request->full_name;
			$user->email = $request->email;
			$user->password = $request->password;
	
			$isSaved = $user->save();

			return ($isSaved)? $user: [];
	
		}catch (Exception $e) {

			echo $e->getMessage();
			return false;
        }
	}



	public function getUserByEmail($email){

		try{
			return User::where('email',$email)->first();
			
		}catch (Exception $e){

			echo $e->getMessage();
			return false;
			
        }
	
	
	}

	public function saveToken($payload){

		try{
			$userToken = new UserToken();
			$token = time();
			$userToken->user_id = $payload->id;
			$userToken->token = $token;
			$userToken->save();
			return $token;
			
		}catch (Exception $e){

			echo $e->getMessage();
			return false;
			
        }
		
	}

} 