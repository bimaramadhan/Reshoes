<?php

use App\Http\Controllers\HomeController;

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

Route::group(['middleware'=>['web','auth']], function(){
    Route::get('/', function () {
        if (Auth::user()->admin == 0) {
            return view('home');
        } else {
            $users['users'] = \App\User::all();
            return view('adminhome', $users);
        }
    });

    Route::get('/index', function() {
        if (Auth::user()->admin == 0) {
            return redirect('shares/');
        } else {
            return redirect('shares2/');
        }
    });

    Route::get('/home', function() {
        if (Auth::user()->admin == 0) {
            return view('home');
        } else {
            $users['users'] = \App\User::all();
            return view('adminhome', $users);
        }
    });
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepage2');
});

// Route::get('/index', function () {
//     return redirect('shares/');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('shares', 'ShareController');
Route::resource('shares2','ShareController2');

