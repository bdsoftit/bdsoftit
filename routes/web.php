<?php

use App\Pakage;
use App\Currency;
use App\Subscribe;
use App\Emailhosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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
    $currency=Currency::all();
    $pakage=Pakage::all();
    return view('hosting')->with('pakage',$pakage)->with('currency',$currency);
});

Route::get('/hosting/email', function () {
    $currency=Currency::all();
    $emailHosting=Emailhosting::all();
    return view('email-hosting')->with('emailHosting',$emailHosting)->with('currency',$currency);
});

Route::get('/project/{id}', 'HomeController@portfolio')->name('single.portfolio');

Route::group(['prefix' => 'admin'], function () {

    Auth::routes();
    Route::get('/home', 'AdminController@index')->name('home');
    Route::get('/portfolio/edit/{id}', 'AdminController@portfolioEdit')->name('portfolio.edit');
    Route::put('/portfolio/edit/', 'AdminController@portfolioEditPost')->name('edit.portfolio.post');


    Route::get('/pakage', 'AdminController@pakageShow')->name('pakage.show');
    Route::get('/pakage/add', 'AdminController@pakageAdd')->name('pakage.add');
    Route::post('/pakage/add', 'AdminController@pakageAddPost')->name('pakage.add.post');
    Route::get('/pakage/{id}', 'AdminController@pakageEdit')->name('pakage.edit');
    Route::put('/pakage/edit', 'AdminController@pakageEditPost')->name('pakage.edit.post');
    Route::delete('/pakage/delete/{id}', 'AdminController@pakageDelete')->name('pakage.delete');


    Route::get('/emailhosting', 'AdminController@emailhostingShow')->name('emailhosting.show');
    Route::get('/emailhosting/add', 'AdminController@emailhostingAdd')->name('emailhosting.add');
    Route::post('/emailhosting/add', 'AdminController@emailhostingAddPost')->name('emailhosting.add.post');
    Route::get('/emailhosting/{id}', 'AdminController@emailhostingEdit')->name('emailhosting.edit');
    Route::put('/emailhosting/edit', 'AdminController@emailhostingEditPost')->name('emailhosting.edit.post');
    Route::delete('/emailhosting/delete/{id}', 'AdminController@emailhostingDelete')->name('emailhosting.delete');



    Route::get('/subscribers', function () {
        $emails=Subscribe::all();
        return view('admin.subscribers')->with('emails',$emails);
    })->name('subscribers');


    Route::get('/currency', 'AdminController@currencyShow')->name('currency.show');
    Route::get('/currency/add', 'AdminController@currencyAdd')->name('currency.add');
    Route::post('/currency/add', 'AdminController@currencyAddPost')->name('currency.add');
    Route::get('/currency/edit/{id}', 'AdminController@currencyEdit')->name('currency.edit');
    Route::put('/currency/edit', 'AdminController@currencyEditPost')->name('currency.edit.post');



});


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'AdminController@logout')->name('logout');
Route::post('/logout', 'AdminController@logout')->name('logout');


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