<?php 
/*
|--------------------------------------------------------------------------
| ModuleOne Module Routes
|--------------------------------------------------------------------------
|
| All the routes related to the ModuleOne module have to go in here. Make sure
| to change the namespace in case you decide to change the 
| namespace/structure of controllers.
|
*/

Route::group(['middleware' => ['web'],'prefix' => 'user', 'namespace' => 'App\Modules\User\Controllers'], function () {

Route::get('/','UserController@index');
Route::get('login','UserController@login');
Route::any('register','UserController@store');
Route::any('savedata','UserController@saveData');
Route::any('checkemail','UserController@checkEmail');
Route::any('dashboard','UserController@getProfile');
Route::get('chat','UserController@getMessages');

});