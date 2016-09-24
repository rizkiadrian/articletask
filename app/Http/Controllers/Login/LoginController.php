<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // route admin to different page
        if (Sentinel::check()){
        $user = Sentinel::getUser();
        if ( !$user->inRole('Admin')){
        return view('content.profile', compact('user'));
    }
    else{
         return view('content.profileadmin', compact('user'));
    }
}
else{
     return view('content.profile', compact('user'));
}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        // login function
         if ($auth = Sentinel::authenticate($request->all()))

    {
        return redirect()->route('login.index');
    }

       flash('user or name not recognized');
       return redirect('/home');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function logout()
    {
        // logout function
        $user = Sentinel::getUser();
        Sentinel::logout($user, true);
        return redirect('/home');
    }

   
}
