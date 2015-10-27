<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Consumer extends Controller
{
    //
    function register()
    {
        Carbon::now();
//        $consumers=DB::select('select * from consumers');
        $consumers=DB::table('consumers')->get();
        var_dump($consumers);
        return view('consumer/reg');

    }

    function t1(Request $request)
    {
//        $request=Request::all();
        var_dump($request->all());
    }

    function t2()
    {

    }
}
