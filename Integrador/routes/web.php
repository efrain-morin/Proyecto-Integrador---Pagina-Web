<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function() {
    return view('register');
});

Route::get('/admin', function() {
    return view('admin');
});

Route::get('/users', function() {
    return view('users');
});

Route::get('/modify-user', function() {
    return view('modify-user');
});

Route::get('/temporary-users', function() {
    return view('temporary-users');
});

Route::get('/about-us', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});