<?php

use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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


Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/web-application', function () {
    return view('web-application');
});
Route::get('/web-design', function () {
    return view('web-design');
});
Route::get('/hosting', function () {
    return view('hosting');
});

Route::get('/project/{id}', 'HomeController@portfolio')->name('single.portfolio');

Route::group(['prefix' => 'admin'], function () {

    Auth::routes();
    Route::get('/home', 'AdminController@index')->name('home');
    Route::get('/portfolio/edit/{id}', 'AdminController@portfolioEdit')->name('portfolio.edit');
    Route::put('/portfolio/edit/', 'AdminController@portfolioEditPost')->name('edit.portfolio.post');

});


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/logout', 'Auth\LoginController@logout');


Route::get('sendemail', 'HomeController@contactUSPost')->name('sendemail');

Route::get('/subcribe', function (Request $request) {
	$validator = Validator::make($request->all(), [
        'email' => 'required|unique:subscribes|email',
    ]);
    if ($validator->fails()){
    	return redirect()->route('landing');
    }
    Subscribe::create(['email'=>$request->input('email')]);
    return redirect()->route('landing');
})->name('subscribe');