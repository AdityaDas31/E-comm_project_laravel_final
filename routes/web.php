<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserControllers;


///////////////////////////////////// USER PANEL RELAY ROUTES /////////////////////////////////////////////////////

Route::get('/', [App\Http\Controllers\UserControllers::class, 'products'])->name('products');

Route::get('/account', function () {
    return view('user\useraccount');
});

Route::post("/userlogin",[UserControllers::class,'login']);
Route::get('/userlogin', function () {
    return view('user\userlogin');
});

Route::post("/signup",[UserControllers::class,'signup']);
Route::get('/signup', function () {
    return view('user\usersignup');
});

Route::get('/about', function () {
    return view('user\userabout');
});

Route::get('/userlogout', 
[App\Http\Controllers\UserControllers::class, 'products'])->
name('products');














/////////////////// admin ///////////////////////////

Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminindex'])->name('home');

Route::get('/categories', [App\Http\Controllers\HomeController::class, 'admincategories'])->name('categories');

Route::get('/manage_categories', [App\Http\Controllers\HomeController::class, 'adminmanage_categories'])->name('manage_categories');

Route::put('store-categories-form',[
    HomeController::class,'storecategories'
]);

Route::get('/products', [App\Http\Controllers\HomeController::class, 'adminproduct'])->name('products');

Route::get('/manage_products', [App\Http\Controllers\HomeController::class, 'adminmanage_products'])->name('manage_products');

Route::put('store-products-form',[
    HomeController::class,'adminstoreproducts'
]);

//Route::get('delete/{id}','HomeController@productdestroy');

Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'adminproductdestroy'])->name('productdestroy');



Route::group(['middleware' => ['prevent-back-history']],function(){
    Auth::routes();
    Route::get('logout', function ()
{
    $session_id = Session::getId();
    session()->forget($session_id);
    //Auth::logout();
    //session_unset();
    return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');

    //these attempts will not remove values from the session.....

    //session()->forget('db');
    //Session::flush();
})->name('logout');

});

