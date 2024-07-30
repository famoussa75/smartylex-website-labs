<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mailController;


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
    return view('pages.home');
})->name('home');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/docs', function () {
    return view('pages.docs');
})->name('docs');

Route::get('/termes-et-conditions', function () {
    return view('pages.policy');
})->name('policy');

Route::get('/module-tache', function () {
    return view('pages.modules.taches');
})->name('taches');

Route::post('/contact/souscription', [mailController::class, 'index'])->name('sendMail');
