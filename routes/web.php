<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index_clinique');
});

Route::get('/services', function(){
    return view('pages.services');
});

Route::get('/about-us', function(){
    return view('pages.about_us');
});

Route::get('/single-doctors', function(){
    return view('pages.single_doctors');
});

Route::get('/our-doctors', function(){
    return view('pages.our_doctors');
});

Route::get('/contacts', function(){
    return view('pages.contacts');
});

Route::get('/rdv', function(){
    return view('pages.rdv');
});

Route::get('/tarifs', function(){
    return view('pages.tarifs');
});