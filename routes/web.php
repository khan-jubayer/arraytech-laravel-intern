<?php

use App\Http\Controllers\homecontroller; //
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/bangladesh', [homecontroller::class, 'index']);
Route::get('/about', [homecontroller::class, 'about']);

Route::get('/my-html', function () {
    return view('my-html'); // Loads 'resources/views/my-html.blade.php'
});

Route::get('/conditional', function () {
    $isLoggedIn = true;  // can set this to true or false for testing
    return view('conditional', compact('isLoggedIn'));
});

// Route to show the welcome page
Route::get('/welcome', [MyController::class, 'showWelcome']);

// Route to show a message page with data passed from the controller
Route::get('/message', [MyController::class, 'showMessage']);

// Root Directory
Route::get('/', [homecontroller::class, 'root']);

// Data Submit
Route::post('/submit', [homecontroller::class, 'submit']);

// Show data
Route::get('/show-data', [homecontroller::class, 'show_data']);

// Edit data
Route::get('/edit-data/{id}', [homecontroller::class, 'edit_data']);

//  Update data
Route::post('/update/{id}', [homecontroller::class, 'update']);

// Delete data
Route::get('/delete-data/{id}', [homecontroller::class, 'delete_data']);