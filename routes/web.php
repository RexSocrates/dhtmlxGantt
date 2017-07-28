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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('gantt');
});

Route::get('gantt', function() {
    return view('gantt');
});

Route::get('grid', function() {
    return view('grid');
});

Route::get('scheduler', function() {
    return view('scheduler');
});

Route::get('/scheduler', function () {
   return view('scheduler');
});

Route::get('scheduler2', function() {
    return view('scheduler2');
});

Route::match(['get', 'post'], '/scheduler_data', "SchedulerController@data");

Route::match(['get', 'post'], '/gantt_data', "GanttController@data");

Route::match(['get', 'post'], '/grid_data', "GridController@data");

Route::get('ajax',function(){
   return view('message');
});

Route::get('getAjaxTestPage', function() {
    return view('ajaxTest');
});

Route::post('ajaxPost', 'AjaxController@getPostRequest');

Route::post('/getmsg','AjaxController@index');