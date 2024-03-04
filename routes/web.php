<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome'); //view is a global function
// });

// Route::get('/',function(){
//     return view('index');
// })->name('index');

Route::get('/',[UserController::class,'index'])->name('index');

Route::get('/gallery',[UserController::class,'gallery'])->name('gallery');

Route::get('/about',[UserController::class,'about'])->name('about');

Route::get('/contact-us',[UserController::class,'contactUs'])->name('contact_us');

Route::get('/login',[UserController::class,'login'])->name('login');

Route::get('/passing-id/{id}',[UserController::class,'passingName'])->name('passing.id');

Route::post('/insert-data',[UserController::class,'insertData'])->name('insert.data');

Route::get('/contact-us/{name}',[UserController::class,'contactUsGetName'])->name('getName.contact_us');

Route::get('/calculate/{answer?}',[CalculateController::class,'calculateNumbers'])->name('calculate_numbers');

Route::post('/calculate',[CalculateController::class,'calculate'])->name('calculate');

Route::get('/student',[StudentController::class,'viewStudent'])->name('view_student');

Route::get('/add-student',[StudentController::class,'addStudent'])->name('add_student');

Route::post('/add-student',[StudentController::class,'insertStudent'])->name('insert_student');

Route::get('/delete-student/{id}',[StudentController::class,'deleteStudent'])->name('delete_student');

Route::get('/edit_student/{id}',[StudentController::class,'editStudent'])->name('edit_student');

Route::post('/edit_student',[StudentController::class,'updateStudent'])->name('update_student');
