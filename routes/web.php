<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// Route::get('/contacts', function () {
//     return view('contacts');
// });
Route::get('/contacts', [UserController::class, 'index']);

Route::get('/groups', function () {
    return view('groups');
});

Route::get('/addcontact', function () {
    return view('addcontact');
});

Route::get('/addgroup', function () {
    return view('addgroup');
});

Route::get('/forum', function () {
    return view('forum');
});