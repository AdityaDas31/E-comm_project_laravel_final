<?php

namespace App\Http\Controllers;
use App\Http\Request;
use Illuminate\Routing\Controller as accountController;

class Controller extends accountController
{
//     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function account()
{
    return view('account');
}
}
