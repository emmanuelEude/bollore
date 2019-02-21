<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::post('recover', 'AuthController@recover');
Route::group(['middleware' => ['jwt.auth']], function() {
    Route::get('logout', 'AuthController@logout');
    Route::post('/medecin/store', 'MedecinController@store');
   
    Route::post('/certificat-one/store', 'CertificatController@store');
    Route::get('/certificat-one/get/{id}', 'CertificatController@getCertificat');
    Route::put('/medecin/update', 'MedecinController@update');
    Route::put('/medecin/update-compte', 'MedecinController@update_compte');
    Route::get('test', function(){
        return response()->json(['foo'=>'bar']);
    });
});