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
Route::get('/classroom/showClassroom', 'TestController@showClassroomList')->name('showClassroomList');
Route::get('/classroom/add', 'TestController@showAddClassroom')->name('showAddClassroom');
Route::post('/classroom/add', 'TestController@handleAddClassroom')->name('handleAddClassroom');

Route::get('/student/Students', 'TestController@showStudentsList')->name('showStudentsList');
Route::get('/student/addst', 'TestController@showAddStudent')->name('showAddStudent');
Route::post('/student/addst', 'TestController@handleAddstudent')->name('handleAddstudent');

Route::get('student/delete/{id}', 'TestController@handleDeleteStudent')->name('handleDeleteStudent');

Route::get('student/showStudentDetails/{id}', 'TestController@showStudentDetails')->name('showStudentDetails');

Route::get('student/edit/{id}', 'TestController@showUpdateStudent')->name('showUpdateStudent');

Route::post('student/{id}', 'TestController@handleUpdateStudent')->name('handleUpdateStudent');

