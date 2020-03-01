<?php


   //====================================ADMIN=============================================//


    Route::get('/admin','Admin\HomeController@index')->name('admin.home');

    //===== Admin Login Controller
    Route::get('/admin/login','Admin\LoginController@index')->name('admin.login');
    Route::post('/admin/login','Admin\LoginController@AdminLogin')->name('admin.login.post');



   //====================================FRONTEND =============================================//

    //===== Home Controller
    Route::get('/','HomePageController@index')->name('home')->middleware('isAdmin');
    Route::post('/add-comment','HomePageController@addComment')->name('add.comment');
    Route::post('/','HomePageController@NewsPost')->name('home.post')->middleware('isAdmin');
    Route::get('/like/{id}','HomePageController@like')->name('like')->middleware('isAdmin');
    Route::get('/view/{id}','HomePageController@viewPost')->name('view')->middleware('isAdmin');

    //===== User Controller
    Route::get('/login','UserController@Login')->name('login')->middleware('isLogin');
    Route::post('/login','UserController@PostLogin')->name('login.post')->middleware('isLogin');
    Route::get('/logout','UserController@Logout')->name('logout')->middleware('isAdmin');
    Route::post('/register','UserController@Register')->name('register.post');
    Route::match(['get', 'post'], '/forgot', 'UserController@Forgot')->name('forgot.pass');

    //===== Profile Controller
    Route::get('/profile','ProfileController@index')->name('profile');
    Route::post('/profile','ProfileController@updatePost')->name('profile.update.post');
    Route::delete('/profile/{id}', 'ProfileController@deletePost')->name('post.destroy');


    //===== Friends Controller
    Route::get('/friends/{nickname}','FriendsController@friendsProfile')->name('friends');
    Route::post('/friends/{user_id}','FriendsController@Message')->name('friend.message');

    //===== Message Controller
    Route::get('/messages','MessagesController@Messages')->name('messages');

    //===== ProfileSetting Controller
    Route::get('/profile-settings','ProfileSettingsController@index')->name('profile-settings');
    Route::post('/profile-settings/account','ProfileSettingsController@Account')->name('profile.account');
    Route::post('/profile-settings/','ProfileSettingsController@ResetPassword')->name('reset.password');
    Route::post('/profile-settings/deactive','ProfileSettingsController@DeactiveAccount')->name('deactive.account');

    //===== Forum Controller
    Route::get('/forum','ForumController@index')->name('forum');


//    Route::prefix('kullanici')->group(function () {
//        Route::get('/login','UserController@Login')->name('login')->middleware('isLogin');
//        Route::post('/login','UserController@PostLogin')->name('login.post')->middleware('isLogin');
//        Route::get('/logout','UserController@Logout')->name('logout');
//        Route::post('/register','UserController@Register')->name('register.post');
//    });
