<?php

namespace App\Repository\User;

use Illuminate\Http\Request;

interface iUserRepository{


	/**
	 * Create New User
     * @param Request $request
	 */
	public function create(Request $request);

	/**
	 * Get user By email
     * @param string $email
	 */
	public function getUserByEmail($email);


	/**
	 * Create token and save in to the database
     * @param Array $payLoad
	 */
	public function saveToken($payLoad);
}