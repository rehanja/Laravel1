<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

//event routes-rehan 

Route::get('/event', 'event\eventController@index');

Route::post('/eventSave', 'event\eventController@eventSave')->middleware('role:supervising_officer|or_pm');   

Route::get('/event/delete/{id}',[
    'uses'=>'event\eventController@eventDelete',
    'as'=>'event.delete'])->middleware('role:supervising_officer|or_pm'); 

Route::get('/event/update/{id}',[
    'uses'=>'event\eventController@eventUpdate',
    'as'=>'event.update'])->middleware('role:supervising_officer|or_pm'); 

Route::post('/event/save/{id}',[
    'uses'=>'event\eventController@eventUpdateSave',
    'as'=>'event.save' ])->middleware('role:supervising_officer');

Route::post('/event/save/{id}',[
    'uses'=>'HomeController@index@eventUpdateSave',
    'as'=>'event.save'
    ])->middleware('role:supervising_officer|or_pm'); 


Route::get('/assign',[
    'uses'=>'HomeController@assignHome',
    'as'=>'assign'  
    ])->middleware('role:supervising_officer|or_pm');  
        
Route::post('/assign/save',[
    'uses'=>'HomeController@index',
    'as'=>'assign.save' 
    ])->middleware('role:supervising_officer|or_pm'); 


        
       
// sanduni's routes


// achini's routes - Meeting
Route::get('/meeting',function(){

    $a=App\Meeting::all();
    return view('meeting/meetingHome')->with('meeting',$a);
    });

Route::get('create', [
    'uses'=>'meeting\meetingController@MeetingCreate', 
    'as'=>'meetingCreate'
    ]);
      
Route::post('create', [
    'uses'=>'meeting\meetingController@MeetingStore', 
    'as'=>'meetingStore'
    ]);

Route::get('/delete/{id}',[
    'uses'=>'meeting\meetingController@MeetingDelete',
    'as'=>'meetingDelete'
    ]);
    
Route::get('/update/{id}',[
    'uses'=>'meeting\meetingController@MeetingUpdate',
    'as'=>'meetingUpdate'
    ]);
    
Route::post('/save/{id}',[
    'uses'=>'meeting\meetingController@MeetingUpdateSave',
    'as'=>'meetingSave'         
        ]);
    
// nimesh's routes
 

