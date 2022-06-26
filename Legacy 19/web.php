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



Route::get('/', 'HomeController@minders')->name('minders');
Route::get('/minders', 'HomeController@minders')->name('minders');

Route::get('/panal', 'HomeController@panal')->name('panal');

//contact
Route::post('/', 'contactController@store');

Route::get('/contacts/index.blade.php', 'contactController@index');

Route::get('/allevent', 'eventController@showallevent')->name('allevent');
Route::get('/allmember', 'MemberController@showallmember')->name('allmember');

//forms
Route::get('/form/{id}', 'eventController@showform');
Route::get('/feedback/{id}', 'eventController@showfeedbackform');
Auth::routes();

// ac
Route::get('/ac',function(){
    return view('ac');
});

//legacy landing page route
Route::get('/Legacy',function(){
    return view('legacylanding');
});
//legacy seasons routes
Route::get('/Legacy-season15',function(){
    return view('legacy15');
});
Route::get('/Legacy-season16',function(){
    return view('legacy16');
});
Route::get('/Legacy-season17',function(){
    return view('legacy17');
});
Route::get('/Legacy-season18',function(){
    return view('legacy18');
});
Route::get('/Legacy-season19',function(){
    return view('legacy19');
});
Route::get('/Legacy-season20',function(){
    return view('legacy20');
});
Route::get('/Legacy-season21',function(){
    return view('legacy21');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events/index.blade.php', 'eventController@allevent');
//add event
Route::get('/events/addevent.blad.php', 'eventController@show')->name('show');
Route::post('/events/index.blade.php', 'eventController@add');

Route::get('/events/{id}/edit', 'eventController@edit')->name('editprofile');
Route::put('/events/{id}', 'eventController@update');

//to delete
Route::delete('/events/{id}', 'eventController@destroy');
Route::get('/events/{id}', 'eventController@showeventdetails');

//members

Route::get('/members/index.blade.php', 'MemberController@index');

Route::get('/members/create.blade.php', 'MemberController@create');
Route::post('/members/index.blade.php', 'MemberController@store');


Route::get('/members/{id}/edit', 'MemberController@edit');
Route::put('/members/{id}', 'MemberController@update');

//to delete
Route::delete('/members/{id}', 'MemberController@destroy');



//for test ac page: hegazy
//Route::get('/ac', 
//function () {
//  return view('ac');}
//  )->name('ac');



