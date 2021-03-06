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

Route::get('/register-temporary', function() {
    return view('register-temporary');
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

Route::get('/building', function() {
    return view('building');
});

Route::get('/register-building', function() {
    return view('register-building');
});

Route::get('/apartments', function() {
    return view('apartments');
});

Route::get('/register-apartment', function() {
    return view('register-apartment');
});