<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use App\Models\signup;

class UserController extends Controller
{
    function login(Request $req)
    {
        $products = DB::select('select * from manage__products__posts');
        return view('user.userindex',['products'=>$products]);
    }
    function signup(Request $req)
    {
    $signup=new Signup;
    $signup->fname=$req->fname;
    $signup->uname=$req->uname;
    $signup->pnum=$req->pnum;
    $signup->email=$req->email;
    $signup->Password=Hash::make($req->Password);
    $signup->conpass=Hash::make($req->conpass);
    $signup->save();
    return redirect('user.userhome')->with('status','Category Added');
    //return view ('userhome');
    }
}
