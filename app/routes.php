<?php


Route::get('/','TodoController@index')->before('auth');
Route::get('create', 'TodoController@create')->before('auth');
Route::post('create', 'TodoController@createPost')->before('auth');
Route::get('todo/{id}','TodoController@todo')->before('auth');
Route::get('delete/{id}','TodoController@delete')->before('auth');
Route::get('success/{id}','TodoController@success')->before('auth');
Route::get('nosuccess/{id}','TodoController@nosuccess')->before('auth');
Route::post('todo/{id}/todoUp', 'TodoController@upload')->before('auth');
Route::get('show/{file}', 'TodoController@show')->before('auth');
Route::get('login', array('as' => 'login', function () {

    if (Auth::check()) {
        return Redirect::route('index');

    }
    return View::make('user.login');
}))->before('guest');
Route::post('login','LoginController@login');

Route::get('logout', array('as' => 'logout', function () {

    Auth::logout();
   return Redirect::to('/');
}))->before('auth');
Route::get('register','LoginController@register');
Route::post('register','LoginController@registerPost');