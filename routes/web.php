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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/sohair', function () {
//     return "HIiiiiii";
// });

// ////////////////////////////////////////////////
// Route::group(['prefix' =>'user','middleware' =>'auth'] ,function(){  // another way to write middleware in group

// Route::get('/',function(){

//     return 'work';

// });
// // Route::get('show','UserController@ShowuserName');
// // Route::delete('delete','UserController@ShowuserName');
// // Route::put('put','UserController@ShowuserName');
// // Route::get('get','UserController@ShowuserName');


// });
// Route::get('check',function(){  // first form to write route
//     return'middleware';

// })->middleware('auth');


// // Route::get('second','Admin\SecondController@ShowString');// it is inside namespace


// Route::get('login',function(){
//     return 'must be login to access this route';


// }) ->name("login");

// Route::group(['namepace'=>'Admin'],function(){
//     Route::get('second0','SecondController@ShowString0') ->middleware('auth');   // middleware on only this route
//     Route::get('second1','SecondController@ShowString1') ; 
//     Route::get('second2','SecondController@ShowString2') ; 
// });



// Route::resource('news','NewsController');
// all statement in following are in resource
/*
Route::get('news','NewsController@show'); //show = index
Rout::post('news','NewsController@store');
Route::get('news/create','NewsController@create');
Route::get('news/{id}/update','NewsController@edit');
Route::post('update/{id}','NewsController@update');
Route::delete('news/{id}','NewsController@delete');

*/

// Route::get('index','Front\UserController@GetIndex'); 
// Route::get('/',function(){
//     return view ('welcome')->with('data',2);

// });



// Route::get('/landing',function(){
//     return view('landing');

// });















Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/logout',function(){
 return 'home';

});

//Route::get('/home', 'HomeController@index')->name('home');






