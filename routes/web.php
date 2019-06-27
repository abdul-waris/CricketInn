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
    return view('/auth.login');
});

//User Routes::::::::::::::::::::::::::::
Route::get('/home' , 'UserController1@home');
Route::get('/news','UserController1@news');
Route::get('/markasread', function(){
auth()->user()->unreadNotifications->markAsRead();
});
Route::post('/postnews' , 'UserController1@postnews');
/////////////////////////Teams Nad Players
Route::get('/playerregister' , 'UserController@player')->name('User.team.playerregister');
Route::post('/booked' , 'UserController@groundbooking')->name('User.booked');
Route::get('/teams','UserController@teams')->name('User.team.teams');
Route::get('/teamshow{id}','UserController@showteammember')->name('User.showteammember');
Route::get('/teamedit{id}','UserController@edit')->name('User.team.editteamplayer');
Route::post('/update{id}','UserController@update');
///////////////////// End Teams And Players

/*
    Ground Book With Payment
*/
Route::get('/groundregistration' , 'UserController@groundregistor')->name('User.groundbook.groundregistration');
Route::post('/groundbooking' , 'UserController@groundbooked',function (){
    if(Request::ajax()){
        return Response::json(Request::all());
            }
})->name('User.groundbook.groundbooking');
Route::get('/checkout','UserController@payment')->name('User.groundbook.payment');
Route::get('/success','UserController@pay')->name('user.groundbook.payground');
Route::get('/groundbooked','UserController@groundbook')->name('user.groundbook.groundbooked');
/*
    End Ground Book
*/
//////////////////////////Fixture/////////////////////
Route::get('/fixture','UserController1@fixture')->name('User.fxture.fixture');
Route::get('/fixture{id}','UserController1@showfixturematch')->name('User.fixture.showfixturematch');
Route::get('/newsnotification','UserController@newsnotification');
///////////////////End Fixture /////////////////////////////
/*
    Ticketbook With Payment
*/
Route::get('/ticketbooking','UserController@fixtureticket')->name('User.ticketbook.ticketbook');
Route::get('/ticketbookingground{id}','UserController@ticketbookingground')->name('User.ticketbook.ticketbookingground');
// Route::get('/ticket{name}/{id}','UserController@ticket')->name('ticket');
Route::get('/ticket{name}-{int}','UserController@tickett')->name('User.ticketbook.tickett');
Route::post('/ticketbooked','UserController@ticketbooked')->name('User.ticketbook.ticketbooked');
Route::get('/payment','UserController@ticketpay');
Route::get('/ticketbooked' , 'UserController@ticketbookedd')->name('User.ticketbook.bookedticket');
//Route::get('/ticketbook{id}','UserController@ticketbook')->name('ticketbook');
/*
    End Ticket Book
*/
//Live score
Route::get('/livescore','UserController@livescore')->name('User.livescore.livescorefixture');
Route::get('/livescoreboard{id}','UserController@livescoreboard')->name('User.livescore.livescoreboard');
// End Live Screo
//Route::get('ticket/{name}', function ($name) {
    //
//})->where('name', '[A-Za-z]+');

Route::get('/image','UserController@image');
Route::post('/imageupload','UserController@imageupload');
Route::get('/markasread',function(){
    auth()->user()->unreadNotifications->markasread();
});
//////////////////////////////Schedule Matches  /////////////////////////////
Route::get('/schedulelastmatch','UserController@schedulelastmatch')->name('user.schedule.schedulelastmatch');
Route::get('/schedulecurrentmatch','UserController@schedulecurrentmatch')->name('user.schedule.schedulecurrentmatch');
Route::get('/schedulenextmatch','UserController@schedulenextmatch')->name('user.schedule.schedulenextmatch');
//////////////////////////////End Schedule Matches  /////////////////////////////

////////////////search byteamname
Route::get('/search','UserController@searchbyteamname')->name('user.search');
Route::post('/searched','UserController@search',function (){
    if(Request::ajax()){
       // var_dump(Input::all());
        return Response::json(Request::all());
            }
});
Route::get('/matchbydate{id}','UserController@matchbydate');
Route::get('/show{id}','UserController@show');
Route::get('/match{id}','UserController@showmatch');
Route::get('/bookedmatchprintform{id}','UserController@bookedmatchprintform')->name('User.bookedmatchprintform');
//////////////end searchby teamname

////////////search by ground
Route::get('/searchbygroundname','UserController@searchbygroundname');
Route::post('/grounds','UserController@grounds',function (){
    if(Request::ajax()){
       //var_dump(Input::all());
        return Response::json(Request::all());
            }
});

//////Search By Date
Route::get('/searchbydate','UserController@searchbydate')->name('user.searchbydate');
Route::post('/datee','UserController@searchbydatee',function (){
        if(Request::ajax()){
           // var_dump(Input::all());
            return Response::json(Request::all());
                }
    });
// Route::post('/matchs','UserController@searchbydatee',function (){
//     if(Request::ajax()){
//        // var_dump(Input::all());
//         return Response::json(Request::all());
//             }
// });
Route::get('/about','UserController1@about')->name('User.about');
Route::get('/contact','UserController1@contact')->name('User.contact');

//Admin Routes:::::::::::::::::::::::::::::
//Route::get('Admin/news' , 'AdminController@news')->name('Admin.news');
// Route::post('Admin/home' , 'AdminController@postnews')->name('Admin.home');
Route::get('Admin/registeredground' , 'AdminController@registeredground')->name('Admin.newground.allgrounds');
Route::get('Admin/deleteGround/{id}','AdminController@destory');
Route::get('Admin/destoryUser/{id}','AdminController@destoryUser');
Route::get('Admin/adminlayout' , 'AdminController1@adminlayout')->name('Admin.adminlayout');
Route::get('Admin/users','AdminController@allusers')->name('Admin.user.allusers');
Route::get('Admin/detail{id}','AdminController@userdetail')->name('Admin.user.userdetail');
Route::get('Admin/bookedtickets','AdminController@allbookedticket')->name('Admin.ticketbook.allusertk');
Route::get('Admin/tkdetail{id}','AdminController@usertkdetail')->name('Admin.ticketbook.usertkdetail');
Route::get('Admin/ticketdetail{id}','AdminController@bookedticketdetail');
Route::get('Admin/groundbookeds','AdminController@allgroundbooks')->name('Admin.groundbook.allusersgb');
Route::get('Admin/gbdetail{id}','AdminController@groundbookdetail')->name('Admin.groundbook.gbdetail');
Route::get('Admin/team','AdminController@teams')->name('Admin.team.team');
Route::get('Admin/team_registration','AdminController@teamregistration')->name('Admin.team_registration');
Route::post('Admin/teamregister','AdminController@teamregistor')->name('Admin.team.team_register');
Route::get('Admin/show{id}','AdminController@show')->name('Admin.team.showteam');
Route::get('Admin/edit{id}','AdminController@teamedit')->name('Admin.team.updateteam');
Route::post('Admin/teamupdate{id}','AdminController@teamupdate')->name('Admin.team.showteam');
Route::get('Admin/post{id}','AdminController@postnewsbyid')->name('Admin.postnewsbyid');
Route::post('Admin/news','AdminController@postnews');
Route::get('Admin/booked','AdminControler@booked')->name('Admin.team.booked');

Route::get('Admin/fixture','AdminController@Fixture')->name('Admin.fixture');
Route::get('Admin/fixture{id}','AdminController@showfixturematch');
Route::get('Admin/livescore','AdminController@livescore')->name('Admin.livescore.livescore');
Route::get('Admin/livscore{id}','AdminController@livescorebyid')->name('Admin.livescore.livescorebyid');
Route::post('Admin/postlivescore','AdminController@postlivescore',function (){
    if(Request::ajax()){
        return Response::json(Request::all());
            }
});
//Route::post('Admin/livescored','AdminController@livescored')->name('Admin.livescore');
Route::get('Admin/groundbook','AdminController@groundbook')->name('Admin.groundbooking.groundbook');
Route::post('Admin/groundbooked','AdminController@groundbooked')->name('Admin.groundbooking.groundbooked');
Route::get('Admin/schedulelastmatch','AdminController@schedulelastmatch')->name('Admin.schedule.schedulelastmatch');
Route::get('Admin/schedulecurrentmatch','AdminController@schedulecurrentmatch')->name('Admin.schedule.schedulecurrentmatch');
Route::get('Admin/schedulenextmatch','AdminController@schedulenextmatch')->name('Admin.schedule.schedulenextmatch');
Route::get('Admin/ground','AdminController@grounds')->name('Admin.newground.ground');
Route::post('Admin/newgroundregister','AdminController@newgroundregister')->name('Admin.newground.newgroundregister');     
Route::get('Admin/bookedmatchprintform{id}','AdminController@bookedmatchprintform')->name('Admin.bookedmatchprintform');
Route::get('Admin/matchticket','AdminController@fixtureticket')->name('Admin.ticketbooking.matchticket');
Route::get('Admin/ticketbooking{id}','AdminController@ticketbooking')->name('Admin.ticketbooking.ticketbooking');
Route::get('Admin/ticket{name}-{int}','AdminController@tickett')->name('Admin.ticketbooking.ticket');
Route::post('Admin/ticketbooked','AdminController@ticketbooked')->name('Admin.ticketbooking.ticketbooked');
Route::get('Admin/aboutus','AdminController@about')->name('Admin.aboutus');
Route::get('Admin/contact','AdminController@contact')->name('Admin.contact');  

Route::get('Admin/update{id}','AdminController@editnews');
Route::post('Admin/newsupdate{id}','AdminController@newsupdate');
Auth::routes();



   // Route::get('/home', 'UserController@userindex');

   // Route::get('Admin/home', 'AdminController@adminindex');

    Route::get('/Admin','Admin\LoginController@showLoginForm')->name('Admin.login');
    Route::post('/Admin','Admin\LoginController@login')->name('Admin.login.submit');
   // Route::get('Admin/login', 'Admin\LoginController@adminlogout')->name('Admin.logout');
    Route::get('Admin/home', 'AdminController@adminindex')->name('Admin.home');
    Route::post('/Admin/password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('Admin.password.email');
    Route::get('/Admin/password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('Admin.password.request');
    Route::post('/Admin/password/reset','Admin\ResetPasswordController@reset');
    Route::get('/Admin/password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('Admin.password.reset');
    Route::get('/Admin/register','Admin\RegisterController@showregisterForm')->name('Admin.register');
    Route::post('Admin/home','Admin\RegisterController@register');
   
    //Route::get('/Admin/logout','Admin\LoginController@adminlogout')->name('Admin.logout');
  // Route::get('/user/logout','Auth\LoginController@userlogout')->name('User.logout');
    //Route::post('/news' , 'AdminController@shownews')->name('Admin.hello');
