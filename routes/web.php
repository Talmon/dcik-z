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
    return view('layouts.index');
});

Route::get('/our-history', function () {
    return view('layouts.about-us/our-history');
});

Route::get('/what-we-believe', function () {
    return view('layouts.about-us/what-we-believe');
});


Route::get('/the-fathers-vision', function () {
    return view('layouts.about-us/the-fathers-vision');
});

Route::get('/pastors', function () {
    return view('layouts.about-us/pastors');
});

Route::get('/become-a-member', function () {
    return view('layouts.about-us/become-a-member');
});

Route::get('/cornerstone-academy', function () {
    return view('layouts.about-us/cornerstone-academy');
});

Route::get('/men', function () {
    return view('layouts.ministries/men');
});

Route::get('/ladies', function () {
    return view('layouts.ministries/ladies');
});

Route::get('/youth', function () {
    return view('layouts.ministries/youth');
});

Route::get('/children', function () {
    return view('layouts.ministries/children');
});

Route::get('/couples', function () {
    return view('layouts.ministries/couples');
});

Route::get('/ushering', function () {
    return view('layouts.ministries/ushering');
});

Route::get('/security', function () {
    return view('layouts.ministries/security');
});

Route::get('/media', function () {
    return view('layouts.ministries/media');
});

Route::get('/protocol', function () {
    return view('layouts.ministries/protocol');
});

Route::get('/connect', function () {
    return view('layouts.ministries/connect');
});

Route::get('/praise-and-worship', function () {
    return view('layouts.ministries/praise-and-worship');
});

Route::get('/welfare', function () {
    return view('layouts.ministries/welfare');
});

Route::get('/compassion', function () {
    return view('layouts.ministries/compassion');
});

Route::get('/benevolent', function () {
    return view('layouts.ministries/benevolent');
});

Route::get('/vct', function () {
    return view('layouts.ministries/vct');
});

Route::get('/new-believers', function () {
    return view('layouts.ministries/new-believers');
});


Route::get('/missions', function () {
    return view('layouts.ministries/missions');
});

Route::get('/prisons', function () {
    return view('layouts.ministries/prisons');
});

Route::get('/hospital-visitation', function () {
    return view('layouts.hospital-visitation');
});

Route::get('/school-visitation', function () {
    return view('layouts.ministries/school-visitation');
});

Route::get('/careers', function () {
    return view('layouts.resources/careers');
});

Route::get('/news', function () {
    return view('layouts.resources/news');
});

Route::get('/blog', function () {
    return view('layouts.resources/blog');
});

Route::get('/tenders', function () {
    return view('layouts.resources/tenders');
});

Route::get('/prayers', function () {
    return view('layouts.resources/prayers');
});

Route::get('/events', function () {
    return view('layouts.resources/events');
});

Route::get('/sermons', function () {
    return view('layouts.resources/sermons');
});

Route::get('/header-1', function () {
    return view('layouts.header-1');
});

Route::get('/overlay-effects', function () {
    return view('layouts.overlay-effects');
});