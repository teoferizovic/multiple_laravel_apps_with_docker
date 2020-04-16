<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index() {
    	
    	$response = Http::get("http://nginx_two/users");

    	return $response->json();
    }
}
