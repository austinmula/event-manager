<?php

use App\Role;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/roles', [\App\Http\Controllers\UsersController::class, 'Permission']);
Route::resource('users', 'UsersController');
Route::resource('roles', 'RolesController');
Route::resource('events', 'EventsController');

Route::get('/add-user', function(){
    $roles = Role::all();
    return view('admin.create', ['roles'=> $roles]);
});

Route::get('/add-event', function(){
    $categories = \App\EventCategory::all();
//    dd($categories);
    return view('events.create', ['categories'=> $categories]);
});


