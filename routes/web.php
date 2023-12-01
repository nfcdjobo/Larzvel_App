<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MemberController;

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

Route::get('/', [AdminController::class, 'index'])->name('accueil');
Route::post('/createUser', [UserController::class, 'create'])->name('create.user');
Route::get('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/home', [DashboardController::class, 'index'])->name('home');

Route::get('/listingcar', [CarController::class, 'index'])->name('CardController.index');

Route::get('/listingMember', [MemberController::class, 'index'])->name('MemberController.index');
Route::post('/creatingMember', [MemberController::class, 'create'])->name('MemberController.create');

Route::get('/editeMember/{id}', [MemberController::class, 'findById'])->name('MemberController.gitById');
Route::post('/updateMember/{id}', [MemberController::class, 'update'])->name('MemberController.update');

Route::delete('/deleteMember/{id}', [MemberController::class, 'delete'])->name('MemberController.delete');

