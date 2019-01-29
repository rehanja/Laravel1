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
//user login
Route::post('login','API\UserController@login');

//user register
Route::post('register','API\UserController@register');

//check weather a valid user
Route::get('isactive/{id}','ApiContoller@isActive');

//reset password
Route::post('password', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');




//here protecting the routes by providing passport middleware


Route::group(['middleware'=>'auth:api'],function(){

    //dummy route for testing

    Route::get('getmeetings','API\UserController@getAllMeetings');


    //Get all Meetings
    Route::get('/getallmeetings',[
    'uses'=>'ApiContoller@getAllMeeting'
]);

    //get one meeting
    Route::get('/getpeticularmeeting/{id}',['uses'=>'ApiContoller@getPeticularMeeting']);

    //delete meeting
    Route::get('delmeeting/{id}',['uses'=>'ApiContoller@delmeeting']);



    //create meeting
    Route::post('crmeeting',['uses'=>'ApiContoller@MeetingsCreate']);

    // get all events   
    Route::get('/getallevents',[
    'uses'=>'ApiContoller@getallevents'
]);

    // get particular event
    Route::get('/getpeticularevent/{id}',['uses'=>'ApiContoller@getPeticularevent']);

    // get all users
    Route::get('/getallusers',[
    'uses'=>'ApiContoller@getallusers'
]);

    // get particular user
    Route::get('/getpeticularuser/{id}',['uses'=>'ApiContoller@getPeticularuser']);

   //update meeting
   Route::put('/updatemeetings/{id}',['uses'=>'ApiContoller@MeetingUpdate']);

   //get user count
   Route::get('/getusercount',['uses'=>'ApiContoller@usercount']);
});

    //add votes
    Route::get('/voteadd/{id}/{uid}',[
    'uses'=>'ApiContoller@VoteAdd'
    ]);
 
    //update profile
    Route::post('/editprofile/{id}',[
    'uses'=>'ApiContoller@editProfile',
        ]);





