<?php

namespace App\Http\Controllers;

use App\Models\Users_Account;
use Illuminate\Http\Request;

class UsersAccountController extends Controller
{
    public function index(){
        $user = Users_Account::create([
            "username"=>"nak",
            "password"=>"111",
            "isSeller"=>1
        ]);
    }
}
