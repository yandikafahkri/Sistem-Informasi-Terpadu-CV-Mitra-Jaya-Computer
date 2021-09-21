<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
	public function hash(){
		$hash_password = Hash::make('ceo123');
		echo $hash_password;
	}

}