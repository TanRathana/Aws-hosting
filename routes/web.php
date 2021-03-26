<?php

use Illuminate\Support\Facades\Route;

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
// Admin Side
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/profile', function () {
    return view('dashboard.profile');
});

Route::get('/user', function () {
    return view('dashboard.user');
});

Route::get('/home', function () {
    return view('dashboard.create-user');
});

Route::get('/login', function () {
    return view('dashboard.login');
});
Route::get('/roleassignment', function () {
    return view('dashboard.roleassignment');
});
Route::get('/role', function () {
    return view('dashboard.role');
});

Route::get('/research', function () {
    return view('pages.research');
});

// Client side

Route::get('/news', function () {
    return view('pages.news');
});

Route::get('/opportunity', function () {
    return view('pages.opportunity');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/news-detail', function () {
    return view('pages.news-detail');
});

Route::get('/publication', function () {
    return view('dashboard.publication');
});
Route::get('/project', function () {
    return view('dashboard.project');
});

Route::get('/application', function () {
    return view('dashboard.application');
});

Route::get('/job', function () {
    return view('dashboard.job');
});

Route::get('/partner', function () {
    return view('dashboard.partner');
});


// form creat page
Route::get('/user-create', function () {
    return view('dashboard.form-crud.user');
});
Route::get('/role-create', function () {
    return view('dashboard.form-crud.role-create');
});
Route::get('/project-create', function () {
    return view('dashboard.form-crud.project-create');
});
Route::get('/job-create', function () {
    return view('dashboard.form-crud.job-create');
});
Route::get('/partner-create', function () {
    return view('dashboard.form-crud.partner-create');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/opportunity-detail', function () {
    return view('pages.opportunity-details');
});

Route::get('/publication-detail', function () {
    return view('pages.publication-details');
});





