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
    return view('welcome');
})->name('welcome');

Route::get('/licenses', function () {
    return view('licenses');
})->name('licenses');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');

Route::get('/presskit', function () {
    return redirect()->route('resources');
})->name('presskit');

Route::get('/inperson', function () {
    return view('inperson');
})->name('inperson');

Route::get('/me2', function () {
    return view('me2');
})->name('me2');

Route::get('/kickstarter', function () {
    return redirect('https://www.indiegogo.com/projects/emit-world-s-first-productivity-smartwatch/');
})->name('kickstarter');

Route::get('/pitchdeck', function () {
    return redirect('https://1drv.ms/b/s!AgYYSjzpoQzmpFmd4SGe5giBO8b_');
})->name('pitchdeck');

// Route::get('/shop', function () {
//     return redirect('https://emitwatch.myshopify.com/');
// })->name('shop');

// Route for getting user email
Route::post('/subscribe', 'EmailController@store')->name('subscribe');
