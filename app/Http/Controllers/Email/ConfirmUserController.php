<?php

namespace App\Http\Controllers\Email;

use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class ConfirmUserController extends Controller
{
    public function confirm() {

    	

    }

     public function store(Request $request)
     {
     	
   $email = $request->recipent;
   $user = User::where('email', '=', $email)->get()->toArray();
   $data = array( 'email' => $email, 'first_name' => 'Lar', 'from' => 'sample@sample.comt', 'from_name' => 'Vel' );
Mail::send( 'email.email', $data, function( $message ) use ($data)
{

    $message->to( $data['email'] )->from( $data['from'], $data['first_name'] )->subject( 'Welcome!' );

});

        return redirect('/home');
    }
       
        
    }

