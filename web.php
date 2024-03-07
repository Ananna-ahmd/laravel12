<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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



Route::get('/search',function (Request $request){
    dd($_REQUEST);});




Route::post('/register',[MyController::class, 'register'])->name('register');
Route::post('/ajax-register',[MyController::class, 'ajaxRegister'])->name('ajax-register');
Route::post('/ajax-update',[MyController::class, 'ajaxUpdate'])->name('ajax-update');
Route::get('/',[MyController::class,'index'])->name('index');
Route::get('/user-form',[MyController::class,'form'])->name('form');
Route::get('/info',[MyController::class,'our_info'])->name('our_info');
Route::get('/connected',[MyController::class,'connect'])->name('connect');
Route::get('/homepage',[MyController::class,'home'])->name('home');
Route::get('/dashboard',[AdminController::class,'e_learning_home'])->name('e_learning_home');
Route::get('/log',[AdminController::class,'login'])->name('login');
Route::get('/sign',[AdminController::class,'sign_up'])->name('sign_up');
Route::get('/search',[AdminController::class,'search'])->name('search');
Route::get('/course',[AdminController::class,'course'])->name('course');
Route::get('/contact_us',[AdminController::class,'contact_us'])->name('contact_us');
Route::post('/ajax_login',[AdminController::class,'ajax_login'])->name('ajax_login');
Route::post('/ajax_login',[AdminController::class,'log_btn'])->name('log_btn');
Route::get('/datatable',[MyController::class,'dataTable'])->name('datatable');
//Route::put('/update-data/{id}', 'MyController')->name('update.data');



//ROute::get('/', [myController::class, '\App\Models\User::'register'])->name('User');

