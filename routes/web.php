<?php

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
    return redirect()->to('/chat');
});

Auth::routes();

Route::get('/chat', 'ChatController@index');
Route::get('messages', 'ChatController@fetchMessages')->name('fetch_messages');
Route::post('messages', 'ChatController@sendMessage')->name('send_message');