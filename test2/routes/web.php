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
});

// Route::get('/profile', function () {
//     $help = (object)[
//         'name' => "Hoi",
//         'keys' => "MyKey",
//         'interests' => [ 
//             'Music',
//             'Movies',
//             'Heeeey meid'
//         ]
//     ];
    
//     return view('profile')
//         ->with('help', $help);
// });
Route::get('/profile', 'ProfileController@show');

Route::get('/index', 'ProfileController@index');