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


















