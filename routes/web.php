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
    return view('homeview');
});

Auth::routes();


Route::get('Question','QuestionController@index')->name('Question.index');
Route::Post('/','AnswerController@index')->name('Answer.index');
//Route::get('/','QusetionController@store');


//Route::get('Answer','Question@check_Ans')->name('Answer.check_Ans');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
