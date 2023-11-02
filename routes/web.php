<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortController;
use App\Http\Controllers\LoginController;
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


Route::get('/', [PortController::class, 'Profile'])->name('Profile');

Route::get('/login', [LoginController::class, 'Index'])->name('Login');
Route::post('/loginn', [LoginController::class, 'authenticate']);
Auth::routes();
Route::get('/login/dashboard', [LoginController::class, 'admin'])->name('dashboard');
Route::post('/edit_profile/{id}', [LoginController::class, 'edit_profile']);

// Doing Admin Page
Route::get('/login/doing', [LoginController::class, 'doing'])->name('Doing');
Route::get('/login/edit_doings/{id}', [LoginController::class, 'edit_doings']);
Route::post('/updatedoing/{id}', [LoginController::class, 'updatedoing']);
Route::get('/add_doing', [LoginController::class, 'add_doing']);
Route::post('/tambah_doing', [LoginController::class, 'tambah_doing']);

// Resume & Summary Page
Route::get('/login/resume/', [LoginController::class, 'edit_res']);
Route::post('/updateres/{id}', [LoginController::class, 'updateres']);

//Education Page
Route::get('/login/education', [LoginController::class, 'education'])->name('Education');
Route::get('/login/edit_educate/{id}', [LoginController::class, 'edit_educate']);
Route::post('/updateedu/{id}', [LoginController::class, 'updateedu']);
Route::get('/add_edu', [LoginController::class, 'add_edu']);
Route::post('/tambah_edu', [LoginController::class, 'tambah_edu']);

//Experience Page
Route::get('/login/experience', [LoginController::class, 'experience'])->name('Experience');
Route::get('/login/edit_exp/{id}', [LoginController::class, 'edit_exp']);
Route::post('/updateexp/{id}', [LoginController::class, 'updateexp']);
Route::get('/add_exp', [LoginController::class, 'add_exp']);
Route::post('/tambah_exp', [LoginController::class, 'tambah_exp']);

//Skills Page
Route::get('/login/skill', [LoginController::class, 'skill'])->name('Skill');
Route::get('/login/edit_skill/{id}', [LoginController::class, 'edit_skill']);
Route::post('/updateskill/{id}', [LoginController::class, 'updateskill']);
Route::get('/add_skill', [LoginController::class, 'add_skill']);
Route::post('/tambah_skill', [LoginController::class, 'tambah_skill']);

//Portfolio Page
Route::get('/login/portfolio', [LoginController::class, 'portfolio'])->name('Portfolio');
Route::get('/login/edit_port/{id}', [LoginController::class, 'edit_port']);
Route::post('/updateport/{id}', [LoginController::class, 'updateport']);
Route::get('/add_port', [LoginController::class, 'add_port']);
Route::post('/tambah_port', [LoginController::class, 'tambah_port']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
