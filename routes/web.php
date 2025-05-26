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

Route::get('/soignants', function(){
    return view('pages.soignants');
});

Route::get('/contacts', function(){
    return view('pages.contacts');
});

Route::get('/rdv', function(){
    return view('pages.rdv');
});

Route::get('/specialites', function(){
    return view('pages.specialites');
});

Route::get('/consultations', function(){
    return view('pages.consultations');
});

Route::get('/imagerie_medicale', function(){
    return view('pages.imagerie_medicale');
});

Route::get('/labo', function(){
    return view('pages.labo');
});

Route::get('/hospitalisations', function(){
    return view('pages.hospitalisations');
});

Route::get('/soins_infirmiers', function(){
    return view('pages.soins_infirmiers');
});

Route::get('/soins_urgence', function(){
    return view('pages.soins_urgence');
});

Route::get('/gallerie', function(){
    return view('pages.gallerie');
});

Route::get('/actualites', function(){
    return view('pages.actualites');
});

Route::get('/faq', function(){
    return view('pages.faq');
});