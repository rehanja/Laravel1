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

//assign or-fol
Route::get('/assignOrFol', function () {
    return view('assign/assignOrFol');
});

Route::post('/assignOrFol','Auth\UsersController@assignOrFol');


//event routes-rehan

Route::get('/event',function(){
  $a=App\event::all();
    return view('event/eventHome')->with('event',$a);
   });

Route::get('/event', 'event\eventController@index');

Route::post('/eventSave', 'event\eventController@eventSave');



Route::get('/event/delete/{id}',[
    'uses'=>'event\eventController@eventDelete',
    'as'=>'event.delete'])->middleware('role:supervising_officer|or_pm');

Route::get('/event/update/{id}',[
    'uses'=>'event\eventController@eventUpdate',
    'as'=>'event.update'])->middleware('role:supervising_officer|or_pm');

Route::post('/event/save/{id}',[
    'uses'=>'event\eventController@eventUpdateSave',
    'as'=>'event.save' ])->middleware('role:supervising_officer');





Route::get('/assign',[
    'uses'=>'HomeController@assignHome',
    'as'=>'assign'
    ]);

Route::post('/assign/save',[
    'uses'=>'HomeController@index',
    'as'=>'assign.save'
    ]);

Route::post('/assign', 'HomeController@index');






// achini's routes

// routes for Meeting

Route::get('/meeting',function(){

    $a=App\Meeting::all();
    return view('meeting/meetingHome')->with('meeting',$a);
    });

Route::get('create', [
    'uses'=>'meeting\meetingController@MeetingCreate',
    'as'=>'meetingCreate'
    ]);

Route::post('/create', 'meeting\meetingController@MeetingStore');

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


//routes for votes
Route::get('poll', [
    'uses'=>'event\eventController@PollsView',
    'as'=>'pollsview'
    ]);

Route::get('voteAdd',[
    'uses'=>'event\eventController@VoteAdd',
    'as'=>'voteAdd'
    ]);



// nimesh's routes


Route::get('/profile','profile\ProfileController@getProfile');

Route::post('/photoUpload','profile\ProfileController@uploadPhoto');

Route::get('/profile/editprofile/{id}',[
    'uses'=>'profile\ProfileController@editProfile',
    'as'=>'userEdit']);


Route::post('/profile/editprofile/submit','profile\ProfileController@submit');

Route::post('/photoUpload','profile\ProfileController@uploadPhoto');

Route::post('/profile/editprofile/submit/{id}',[
    'uses'=>'profile\ProfileController@submit',
    'as'=>'userUpdate' ]);


