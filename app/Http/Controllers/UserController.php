<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->password=$request->password;
        $user->email=$request->email;
        $user->tel=$request->tel;
        $user->is_seller=$request->is_seller;
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->password=$request->password;
        $user->email=$request->email;
        $user->tel=$request->tel;
        $user->is_seller=$request->is_seller;
        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();
        return 204;
    }

    function login(Request $request)
    {
        $col = User::all();
        if($col->contains('email', $request->email)){
            if($col->contains('password', $request->password)){
                $data = $request->input();
                $request->session()->put('user',$data['email']);
                return view('welcome');
            }
            return view('auth/login');
        }
        else{
            return view('auth/login');
        }
    }

    function signup(Request $request){
        if($request->password == $request->confirm_password){
            User::insert([
                "firstname"=>$request->firstname,
                "lastname"=>$request->lastname,
                "email"=>$request->email,
                "password"=>$request->password,
                "tel"=>"0000"
            ]);
            return view('auth/login');
        }
        else{
            return view('auth/signup');
        }
    }
}
