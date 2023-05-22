<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

//Route:: get('/crud',[CrudController::class, 'index']);
Route:: get('/edit', 'App\Http\Controllers\CrudController@edit');

Route:: get('/update', 'App\Http\Controllers\CrudController@update');
Route:: get('/crud/{name?}', function($name=null){
    $data = compact('name');
    
    return view('crud')->with($data);
});

