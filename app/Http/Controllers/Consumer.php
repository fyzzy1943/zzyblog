<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Request;
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

    function create()
    {
        $request=Request::all();
        var_dump($request);
    }
}
