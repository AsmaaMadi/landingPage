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
/*use App\Doctor;
use App\Http\Resources\Doctor as DoctorResource;

Route::get('/doctor', function () {
    return DoctorResource::collection(Doctor::all());
});*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('alldoctors','DoctorController@index');
Route::post('enterdoctor','DoctorController@store');
Route::post('patient','PatientController@store');