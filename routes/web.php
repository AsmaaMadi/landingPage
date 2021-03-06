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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('doctor', 'DoctorController');
Route::post('registerdoctor','DoctorController@store');
Route::post('registerpatient','PatientController@store');
/*use App\Doctor;
use App\Http\Resources\Doctor as DoctorResource;

Route::get('/doctor', function () {
    return DoctorResource::collection(Doctor::all());
});
Route::post*/
