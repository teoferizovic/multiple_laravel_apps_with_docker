<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

    	$users = [
    		[
    			"id" => 1,
    			"name" => "Edo"
    		],
    		[
    			"id" => 2,
    			"name" => "Dedo"
    		],
    	];
    	return \Response::json($users,200);
    }
}
