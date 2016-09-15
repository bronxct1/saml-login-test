<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/logout', array(
    'as' => 'saml_logout',
    'uses' => '\Aacotroneo\Saml2\Http\Controllers\Saml2Controller@logout',
));
Route::get('/login', array(
    'as' => 'saml_login',
    'uses' => '\Aacotroneo\Saml2\Http\Controllers\Saml2Controller@login',
));
Route::get('/metadata', array(
    'as' => 'saml_metadata',
    'uses' => '\Aacotroneo\Saml2\Http\Controllers\Saml2Controller@metadata',
));
Route::post('/acs', array(
    'as' => 'saml_acs',
    'uses' => '\Aacotroneo\Saml2\Http\Controllers\Saml2Controller@acs',
));
Route::get('/sls', array(
    'as' => 'saml_sls',
    'uses' => '\Aacotroneo\Saml2\Http\Controllers\Saml2Controller@sls',
));
