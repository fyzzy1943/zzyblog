<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', function($id='a'){

    $redirect=redirect()->route('profile', ['id'=>3222]);
    return $redirect;
});

Route::get('user/{id?}', function($id='a'){
    
    return route('profile', ['id'=>1]);
    
})
->where(['id'=>'\d+']);

Route::get('id/{ida}/name/{aa}', function($id, $aa){

    return $id.' '.$aa;
});

Route::any('user/{ida}/profile', ['as'=>'profile', function($id){
    return 'profile'.$id;
}]);