<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Consumer extends Controller
{
    //
    function register()
    {
        return view('consumer/reg');
    }
}
