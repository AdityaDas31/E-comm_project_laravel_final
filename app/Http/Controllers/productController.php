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

    public function products() {
        $products = DB::select('select * from manage__products__posts');
        return view('userindex',['products'=>$products]);
     }
// }
}
