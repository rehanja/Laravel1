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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//event routes-rehan 
Route::get('/event',function(){

    $a=App\event::all();
    return view('event/eventHome')->with('event',$a);
    });

Route::post('/eventSave', 'event\eventController@eventSave');   

Route::get('/event/delete/{id}',[
    'uses'=>'event\eventController@eventDelete',
    'as'=>'event.delete']);

Route::get('/event/update/{id}',[
    'uses'=>'event\eventController@eventUpdate',
    'as'=>'event.update']);

Route::post('/event/save/{id}',[
        'uses'=>'event\eventController@eventUpdateSave',
        'as'=>'event.save'         ]);


        
       
// sanduni's routes


// achinie's routes



// nimesh's routes
 