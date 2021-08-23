<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\GuarantorController;
use App\Http\Controllers\LoanController;



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

Route::resource('grades', GradeController::class    );
Route::resource('designations', DesignationController::class);
Route::resource('types', TypeController::class);
Route::resource('borrowers', BorrowerController::class);
Route::resource('guarantors', GuarantorController::class);
Route::resource('loans', LoanController::class);



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	//MNJ Test
	Route::get('form', function () {
		return view('pages.form');
	})->name('form');

	Route::get('table', function () {
		return view('pages.table_sample');
	})->name('sample');

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

