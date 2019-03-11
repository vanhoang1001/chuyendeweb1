<?php


Route::group(['middleware' => ['web']], function() {
    Route::get('/index', 'CityController@index')->name('index');
    
    Route::get('/flight-list', 'FlightListController@index')->name('flight-list');
    
    Route::get('/register', 'RegisterController@index')->name('register');
    Route::post('/register', 'RegisterController@postRegister');
    
    Route::get('/update', 'UpdateController@getInfor')->name('update')->middleware('auth');
    Route::post('/update', 'UpdateController@postUpdate')->name('attendupdate');
    
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@postLogin');
    Route::get('/logout', 'LoginController@logout')->name('logout')->middleware('auth');
    
    Route::get('/flight-book', 'FlightBookController@index')->name('flight-book');
    Route::post('/flight-book', 'FlightBookController@postFlightBook');
    
});
