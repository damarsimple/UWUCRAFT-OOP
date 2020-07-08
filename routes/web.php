<?php

use Illuminate\Support\Facades\Route;
use App\Itemsdata;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/fire', function () {
    event(new \App\Events\TestEvent());
    return 'ok';
});

Route::get('/shop', function () {
    return view('shop');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/test/{id}', function ($id) {
    $obj = Itemsdata::find($id);
    $obj->counter = $obj->counter + 1;
    $obj->save();
    return $obj;
});
