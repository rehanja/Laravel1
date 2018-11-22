<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');


// routes - sanduni
//verify email
Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

//view users
Route::get('/createUser',function () {
    $d=App\User::all();
    return view('roles/createUser')->with('data',$d);
});

//issue membership
Route::get('/markAsCompleted/{id}','Auth\UsersController@updateAsMember');
Route::get('/markAsNotCompleted/{id}','Auth\UsersController@updateAsNotMember');

//delete Member
Route::get('/deleteMember/{id}','Auth\UsersController@deleteMember');

//update Member
Route::get('/updateMember/{id}','Auth\UsersController@updateMember');
Route::post('/updateUser','Auth\UsersController@updateMemberView');

//event routes-rehan

Route::get('/event',function(){
  $a=App\event::all();
    return view('event/eventHome')->with('event',$a);
   });

Route::get('/event', 'event\eventController@index');

Route::post('/eventSave', 'event\eventController@eventSave');

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
    ]);

Route::post('/assign/save',[
    'uses'=>'HomeController@index',
    'as'=>'assign.save'
    ]);

Route::post('/assign', 'HomeController@index');



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


Route::get('/send/{id}',[
    'uses'=>'meeting\meetingController@MeetingViewMail',
    'as'=>'meetingViewMail'
    ]);




// nimesh's routes

