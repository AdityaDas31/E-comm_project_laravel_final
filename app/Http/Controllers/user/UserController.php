<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user= User::where(['uname'=>$req->uname])->first();
        if($user && Hash::check($req->Password,$user->Password))
        {
            return "UserName or Password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function signup(Request $req)
    {
    $user=new user;
    $user->fname=$req->fname;
    $user->uname=$req->uname;
    $user->pnum=$req->pnum;
    $user->email=$req->email;
    $user->Password=Hash::make($req->Password);
    $user->conpass=Hash::make($req->conpass);
    $user->save();
    return redirect('/');
    }
}
