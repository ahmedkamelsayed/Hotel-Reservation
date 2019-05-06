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
/*
Route::get('/', function () {

    return view('welcome');

});
*/

//Route::POST('/insert','Controller@insert');

Route::POST('add/booking','bookingController@store'); //DE EL METHOD ELY MWGODA F SAF7A HTML ,BOOKING CONTROOLER DE SAF7A CONTROLLER W STORE DE ASM FUNCTION
Route::POST('destroy/booking','bookingController@destroy');
Route::POST('contact/booking','bookingController@contact');
Route::POST('/logi','bookingController@index');




Route::get('/logi', function () {
	
    return view('logi'); // dh master saf7a html
});

//////Route::POST('contact/booking','mediator@connStore');/////////
/////////Route::POST('contact/booking','mediator@connContact');////////////

//Route::resource('booking','bookingController');

Route::get('master', function () {
    return view('master'); // dh master saf7a html
});

Route::get('destroy', function () {
    return view('destroy'); // dh master saf7a html
});


Route::get('/fun_pdf', 'bookingController@fun_pdf');



Route::get('/', function () {
    return view('payment');
});
// payment by visa
Route::post('visa', 'paymentController@paymentvisa');

//payment cash
Route::post('cash', 'paymentController@paymentcash');



///////////////////////////////


Route::get('master2', function () {
    return view('master2');
});

Route::get('users', function () {
    return view('users');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Aroom','AroomController@index');
Route::get('/update','AroomController@update');
Route::post('/store','AroomController@store');
Route::get('/destroy/{id}','AroomController@destroy');
// Route::get('/update', function () {
//     echo 'Hi';
// });
