<?php

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

//Здесь чтение
Route::get('/', function () {
    $obj = new \App\Http\Controllers\UsersCrud();
    return $obj->index();
});
Route::get('/read',function () {
    $obj = new \App\Http\Controllers\UsersCrud();
    $users = $obj->index();
    return view('read',compact('users',$users));
});

//Здесь добавление (страница и вызов функции).
Route::get('/create', function () {
    return view('create');
});
Route::post('/action/create', function () {
    $objUser = new \App\Http\Controllers\UsersCrud();
    $objUser->create();
    return redirect('read');
});

Route::get('/update',function() {
    $obj = new \App\Http\Controllers\UsersCrud();
    $users = $obj->index();
    return view('update',compact('users',$users));
});
Route::post('/update/{id}', function($id) {  //Обновляем данные, передаём идентификатор.
    $obj = new \App\Http\Controllers\UsersCrud();
    $obj->update($id);

    //Возвращаемся на исходную страницу.
    return redirect('update');
});


Route::get('/delete', function () {
   $objUser = new \App\Http\Controllers\UsersCrud();
   $users = $objUser->index();

   return view('delete', compact('users',$users));
});
Route::post('/delete/{id}', function ($id) {
   $objUser = new \App\Http\Controllers\UsersCrud();
   $objUser->delete($id);

   return redirect('delete');
});
