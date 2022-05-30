<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Manage_Categories_Post;
use App\Models\Manage_Products_Post;
use App\Models\signup;
use Illuminate\Http\Request;
class UserControllers extends Controller
{
    ///////////////// user panel controller ///////////////////////

public function products() {
     $products = DB::select('select * from manage__products__posts');
    return view('user\userindex',['products'=>$products]);
}



public function login(Request $req)
{
    $products = DB::select('select * from manage__products__posts');
    return view('user\userhome',['products'=>$products]);
}



public function signup(Request $req)
{
$signup=new Signup;
$signup->fname=$req->fname;
$signup->uname=$req->uname;
$signup->pnum=$req->pnum;
$signup->email=$req->email;
$signup->Password=Hash::make($req->Password);
$signup->conpass=Hash::make($req->conpass);
$signup->save();
//return redirect('user\user_home')->with('status','Category Added');
$products = DB::select('select * from manage__products__posts');
return view('user\userhome',['products'=>$products]);
}

public function userlogout(){
    $products = DB::select('select * from manage__products__posts');
    return view('user\userindex',['products'=>$products]);
}

}
