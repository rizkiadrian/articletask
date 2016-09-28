<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserlistController extends Controller
{
    public function index(){
    	$user = User::all();
        return view('content.userindex', compact('user'));
    }

    public function destroy($id){
    	
    }
}
