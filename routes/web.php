<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;


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

Route::get('admin\home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');


Route::middleware(['auth'])->group(function(){
    Route::get('/home',"HomeController@index")->name('insurance.home');    
    
    Route::resource('insurance','HomeController');
    Route::resource('mail', 'MailController');

});
Route::get('/send-email','MailController@sendmail'); 

