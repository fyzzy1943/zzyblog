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

Route::group(['middleware'=>'auth'], function(){
    Route::get('/cla', function(){
        return 'fffdsa';
    });
});

Route::any('/cla/cla', function(){
    print_r(\App\Http\Middleware\Authenticate::class) ;
//     abort(404);
});

Route::get('my/{ida?}', ['uses'=>'MyController\ControllerTest@index','middleware'=>'tes']);

Route::get('myt', ['uses'=>'ControllerTest@index', 'as'=>'myt']);

Route::get('myaa', function(){
    return redirect('index')->with('status', 'success')->withCookie('name', 'newbee');
});

Route::get('index', function(){
    return var_dump(\Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class);
    return view('index\index')->with('name', '测试');
});

Route::get('ModelTest', 'ModelTest@index');

Route::get('consumer', 'Consumer@register');

Route::any('consumer/p', 'Consumer@t1');

Route::get('consumer/p/{id}', function($id){
    echo App\Consumer::findOrFail($id);
});

Route::get('cone', function(){
    return view('consumer.register');
});

Route::post('cone/register', function(){
    var_dump(Request::all());
});

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::any('consumer/t2/{id?}/{atr}', 'Consumer@t2');

Route::get('/hello/laravel', ['as'=>'hello', function(){
    return 'Hello Laravel';
}]);

Route::get('/testroute', function(){
    return redirect()->route('hello');
});

Route::get('/consu', 'Consumer@t3');});

get('/lalala', function(){
    return 'qweeee';
});