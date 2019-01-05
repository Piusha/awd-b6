<?php

namespace App\Http\Middleware;

use Closure;

use App\Http\Model\User;
use App\Http\Model\UserToken;

class ACLAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

		$userToken = UserToken::where('token',$request->header('authorization'))->first();
		
		$user = User::where('id',$userToken->user_id)->first();
		
		$request->loggedUser = $user;
		
        return $next($request);
    }
}
