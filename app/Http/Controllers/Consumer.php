<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
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
//        dd($request->session()->all());
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

    function t3(Request $request)
    {

        if(Auth::attempt(['user'=>'admin', 'password'=>'admin'])){
            echo 'success' .'<br/>';
        }else{
            echo 'failed', '<br/>';
        }
        return \Response('qwe刘嘉隆')->header('Content-Type','text/html;charset=utf-8');
    }
}
