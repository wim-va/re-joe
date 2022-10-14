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

Route::get('/', function () {
    return view('welcome');
});
// show all listings
Route::get('/{property_type}/{listing_type}/', function(){
    return view('showalllistings');
});
// show single listingtemporarily sto
Route::get('/listing/{slug}/{id}', function(){
    return view('single');
});
// user log in
Route::get('/login',function(){
    return view('login');
});
// user register
Route::get('/register',function(){
    return view('register');
});
// user saved listings
Route::get('/account',function(){
    return view('account');
});
// user showing status
Route::get('/register',function(){
    return view('register');
});
// reserve
Route::get('/register',function(){
    return view('register');
});