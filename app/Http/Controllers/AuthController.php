<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function reg() {
    	return view ('register');
    }

    public function wel(Request $request) {

    	$depan	= $request["fname"];
    	$belakang = $request["lname"];
    	return view ('welcomes', ["depan" => $depan], ["belakang" => $belakang] );
    }
}
