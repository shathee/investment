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

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password Reset Routes...
Route::get('password/reset', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/home', 'HomeController@index');

Route::get('users', 'UserController@index');

Route::get('banks', 'BankController@index');

Route::get('banks/create', 'BankController@create');
Route::post('banks', 'BankController@store');
Route::get('banks/{id}', 'BankController@show');
Route::get('banks/{id}/edit', 'BankController@edit');
Route::post('banks/{id}/edit', 'BankController@update');
Route::get('banks/{id}/delete', 'BankController@destroy');

Route::get('branchs', 'BranchController@index');
Route::post('branchs', 'BranchController@store');
Route::get('branch/create', 'BranchController@create');
Route::get('branch/{id}', 'BranchController@show');
Route::get('branch/{id}/edit', 'BranchController@edit');
Route::post('branch/{id}/edit', 'BranchController@update');
Route::get('branch/{id}/delete', 'BranchController@destroy');


Route::get('tax', 'TaxController@index');
Route::post('tax', 'TaxController@store');
Route::get('tax/create', 'TaxController@create');
Route::get('tax/{id}', 'TaxController@show');
Route::get('tax/{id}/edit', 'TaxController@edit');
Route::post('tax/{id}/edit', 'TaxController@update');
Route::get('tax/{id}/delete', 'TaxController@destroy');

Route::get('taxtrates', 'TaxRateController@index');
Route::post('taxtrates', 'TaxRateController@store');
Route::get('taxtrates/create', 'TaxRateController@create');
Route::get('taxtrates/{id}', 'TaxRateController@show');
Route::get('taxtrates/{id}/edit', 'TaxRateController@edit');
Route::post('taxtrates/{id}/edit', 'TaxRateController@update');
Route::get('taxtrates/{id}/delete', 'TaxRateController@destroy');




Route::get('tests', function () {
    //$comments = App\Branch::find(3)->bank;

    echo $c;

});

Route::get('test/form','BankController@testform' );
