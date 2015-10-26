<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Request;
use App\Http\Controllers\Controller;

class Consumer extends Controller
{
    //
    function register()
    {
        Carbon::now();
        return view('consumer/reg');

    }

    function create()
    {
        $request=Request::all();
        var_dump($request);
    }
}
