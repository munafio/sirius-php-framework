<?php

namespace App\Controllers;

use App\Models\User;
use App\Controllers\Controller;


class homeController extends Controller{
	
	public function index($name,$madeBy){
		Controller::view('welcome',['name' => $name,'madeBy' => $madeBy]);
	}
	/*
	|--------------------------------------------------------------
	| ex: Eloquent ORM - Simple using of [create] to the database 
	|--------------------------------------------------------------
	public function create($username = null, $email = null){
		$sqlQ = User::create([
			'username' => $username,
			'email' => $email
		]);
		if ($sqlQ) {
			echo "<h1>Records inserted successfully!</h1><br>"."Username : ".$username."<br>"."Email Address : ".$email;
		}else{
			echo 'Error';
		}
	}
	*/
}