<?php
use Illuminate\Support\Facades\Input as input;
use App\User;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// routes - sanduni======================================================================================================================

//about page
Route::get('/about', function () {
    return view('about');
});

//verify email
Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

//view users
Route::get('/createUser',function () {
    $d=app\User::paginate(6);
    return view('roles/createUser')->with('data',$d);
});

//issue membership
Route::get('/markAsCompleted/{id}','Auth\UsersController@updateAsMember');
Route::get('/markAsNotCompleted/{id}','Auth\UsersController@updateAsNotMember');

//delete Member
Route::get('/deleteMember/{id}','Auth\UsersController@deleteMember')->name('userDelete');

//update Member
Route::get('/updateMember/{id}','Auth\UsersController@updateMember');
Route::post('/updateUser','Auth\UsersController@updateMemberView');

//assign or-fol
Route::get('/assignOrFol', function () {
    return view('assign/assignOrFol');
});

Route::post('/assignOrFol/save', 'HomeController@assignORFOL');



//event routes-rehan==============================================================================================================

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

Route::get('/events', function () {
        return view('event/events');
    });





Route::get('/assign',[
    'uses'=>'HomeController@assignHome',
    'as'=>'assign'
    ]);

// Route::post('/assign/save',[
//     'uses'=>'HomeController@index',
//     'as'=>'assign.save'
//     ]);

Route::post('/assign/role',[
    'uses'=>'HomeController@assignNewRole',
    'as'=>'assign_new_role'
]);

Route::post('/assign', 'HomeController@index');

Route::get('/contact', function () {
    return view('other/contact');
});







// achini's routes====================================================================================================================

/*routes for Meeting---------------------------------------------------------*/

//view meetings
Route::get('/meeting', 'meeting\meetingController@Index');

//view meeting create form
Route::get('create', [
    'uses'=>'meeting\meetingController@MeetingCreate',
    'as'=>'meetingCreate'
    ]);

//save meeting in db
Route::post('/create', 'meeting\meetingController@MeetingStore');

//delete meeting
Route::get('/delete/{id}',[
    'uses'=>'meeting\meetingController@MeetingDelete',
    'as'=>'meetingDelete'
    ]);

//view meeting update form
Route::get('/update/{id}',[
    'uses'=>'meeting\meetingController@MeetingUpdate',
    'as'=>'meetingUpdate'
    ]);

//save update meeting in db
Route::post('/save/{id}',[

        'uses'=>'meeting\meetingController@MeetingUpdateSave',
        'as'=>'meetingSave'
        ]);

//send email
Route::get('/send/{id}',[
    'uses'=>'meeting\meetingController@MeetingViewMail',
    'as'=>'meetingViewMail'
    ]);


/*routes for votes---------------------------------------------------------------*/

//view vote ratings page
Route::get('poll', [
    'uses'=>'event\eventController@PollsView',
    'as'=>'pollsview'
    ]);

//add vote for events
Route::get('voteAdd',[
    'uses'=>'event\eventController@VoteAdd',
    'as'=>'voteAdd'
    ]);



// nimesh's routes======================================================================================================================


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

Route::post('change/password',function(){
    $User=User::find(Auth::user()->id);
    if(Hash::check(Input::get('passwordold'), $User['password']) && Input::get('password') == Input::get('password_confirmation')){
        $User->password = bcrypt(Input::get('password'));
        $User->save();
        return back()->with('success','Password Changed');
    }
    else{
        return back()->with('error','Password NOT changed');
    }
});




Route::post('/photoUpload','profile\ProfileController@uploadPhoto');








