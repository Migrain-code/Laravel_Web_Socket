<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {

});
Route::get('broadcast', function () {
    $user =\App\Models\User::find(1);

    broadcast(new \App\Events\Example($user));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
