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

Route::view('/hometest','kuseHomeThDemo');
Route::view('/home','homePageNew');
Route::view('/Management-structure', 'ManagementStructure');
Route::view('/Faculty-committee', 'Faculty-committee');
Route::view('/Faculty-Deans', 'Faculty-Deans');
Route::view('/History-Faculty', 'History-Faculty');
Route::view('/Faculty-Vision', 'Faculty-Vision');
Route::view('/ElectricAndComputer-Personnel', 'ElectricAndComputer-Personnel');
Route::view('/MechanicalAndProduction-Personnel', 'MechanicalAndProduction-Personnel');
Route::view('/CivilAndEnvironmental-Personnel', 'CivilAndEnvironmental-Personnel');
Route::view('/ComputerScienceAndInformation-Personnel', 'ComputerScienceAndInformation-Personnel');
Route::view('/Science-Personnel', 'Science-Personnel');
Route::view('/SecretaryOffice-Personnel', 'SecretaryOffice-Personnel');
Route::view('/Course-BachelorDegree', 'Course-BachelorDegree');
Route::view('/ChannelOfAdmission', 'ChannelOfAdmission');
Route::view('/QualificationsOfApplicants', 'QualificationsOfApplicants');
Route::view('/Tuition-fees', 'Tuition-fees');
Route::view('/ApplyToStudy', 'ApplyToStudy');
Route::view('/Scholarships-Education', 'Scholarships-Education');
Route::view('/Dormitory-Kucsc', 'Dormitory-Kucsc');
Route::view('/Related-links', 'Related-links');
Route::view('/Course-Graduate', 'Course-Graduate');
Route::view('/ChannelOfAdmission-Graduate', 'ChannelOfAdmission-Graduate');
Route::view('/QualificationsOfApplicants-Graduate', 'QualificationsOfApplicants-Graduate');
Route::view('/Tuition-fees-Graduate', 'Tuition-fees-Graduate');
