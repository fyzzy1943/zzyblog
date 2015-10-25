<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Consumer extends Controller
{
    //
    function register()
    {
        Carbon::now();
        return view('consumer/reg');

    }
}
