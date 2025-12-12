<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->with('title', 'Bedi Buildwell');
})->name('welcome');

Route::get('/about', function () {
    return view('about')->with('title', 'About Us');
})->name('about');

Route::get('/projects', function () {
    return view('projects')->with('title', 'Projects');
})->name('projects');

Route::get('/core-values', function () {
    return view('pages.core-values')->with('title', 'Core Values');
})->name('core-values');

Route::get('/leadership', function () {
    return view('pages.leadership')->with('title', 'Leadership');
})->name('leadership');

Route::get('/why-choose-us', function () {
    return view('pages.why-choose-us')->with('title', 'Why Choose Us');
})->name('why-choose-us');

Route::get('/contact', function () {
    return view('pages.contact')->with('title', 'Contact');
})->name('contact');

Route::get('/experience', function () {
    return view('pages.experience')->with('title', 'Experience');
})->name('experience');

Route::get('/blog', function () {
    return view('pages.blog')->with('title', 'Blog');
})->name('blog');

Route::get('/calculator', function () {
    return view('pages.calculator')->with('title', 'Construction Cost Calculator');
})->name('calculator');