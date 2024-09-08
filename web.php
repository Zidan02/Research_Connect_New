<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup',[signController::class,'create']);
Route::post('/signup',[signController::class,'insert']);
Route::get('/login',[signController::class,'login']);
Route::post('/login',[signController::class,'postlogin'])->name('postlogin');
Route::get('/dashboard',[signController::class,'dashboard']);
Route::get('/signout',[SignController::class,'signout'])->name('signout');
Route::get('/edit',[SignController::class,'edit']);
Route::post('/editprofile',[SignController::class,'editprofile']);
Route::post('/dashboard/post',[SignController::class,'post']);
Route::post('/dashboard/papers',[SignController::class,'papers']);
Route::post('/dashboard/needpost',[SignController::class,'needpost']);
Route::post('/dashboard/question',[SignController::class,'question']);
Route::post('/dashboard/collaboration',[SignController::class,'collaboration']);
Route::post('/dashboard/jobpost',[SignController::class,'jobpost']);


// Route::get('/dashboard', [SignController::class, 'viewpost']);

