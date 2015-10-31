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
//        var_dump(\App\Consumer::findOrFail(2)->toArray());
        var_dump(\App\Consumer::all()->toArray());
        $consumer=\App\Consumer::create($request->all());
        echo 'start';
        var_dump($consumer->toArray());
        echo 'end';
    }

    function t2(Request $request, $ida='boss', $atra)
    {
        var_dump($request->all());
        var_dump($ida);
        var_dump($atra);
        var_dump($request->method());
        var_dump($request->url());
        var_dump($request->fullUrl());
        var_dump($request->get('aa'));
        var_dump($request->input());
        var_dump($request->input('aa'));
        var_dump($request->get('id'));
        var_dump(\App\Consumer::all()->toArray());
//        dd($request->all(), $atra);
//        dd($atra);
    }
}
