<?php


// Login Page Routes .....

Route::get('/', function () {
    return view('Student_Login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});




//admin login route....

Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');