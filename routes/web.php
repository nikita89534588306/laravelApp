<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotebookController;

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

Route::get('/', [NotebookController::class, 'index'])->name('all_contact');
Route::get('/create_contact', [NotebookController::class, 'create'])->name('form_contact');
Route::post('/store_contact', [NotebookController::class, 'store'])->name('add_contact_db');
