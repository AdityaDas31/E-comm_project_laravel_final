<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
// use Illuminate\Routing\Controller as ProductController;
//use\App\Models\products;

class productController extends Controller
{
//     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

// public function index()
// {
//     return view('index');
// }
// public function product()
// {
//     // $data=product::all();
    // return view('index',['product'=>$data]);
    // // return product::all();


    public function products() {
        $products = DB::select('select * from products');
        return view('index',['products'=>$products]);
     }
// }
}
