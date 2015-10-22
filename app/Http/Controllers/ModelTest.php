<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ModelTest extends Controller
{
    //
    function index()
    {
        Carbon::setLocale('zh');
        $time=Carbon::now();
        return $time;
    }
}
