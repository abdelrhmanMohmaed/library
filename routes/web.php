<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CatController;
use App\Models\Cat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
//     return view('welcome');
// });

Route::get('/', [CatController::class, 'index'])->middleware('auth');
Route::get('/cats', [CatController::class, 'index'])->middleware('auth');
Route::get('/cats/show/{id}', [CatController::class, 'show'])->middleware('auth');
Route::get('/cats/create', [CatController::class, 'create'])->middleware('auth');
Route::post('/cats/store', [CatController::class, 'store'])->middleware('auth');
Route::get('/cats/edit/{id}', [CatController::class, 'edit'])->middleware('auth');
Route::post('/cats/update/{id}', [CatController::class, 'update'])->middleware('auth');
Route::get('/cats/delete/{id}', [CatController::class, 'delete'])->middleware('auth');
Route::get('/cats/search', [CatController::class, 'search'])->middleware('auth');
Route::get('/cats/latest/{num}', [CatController::class, 'latest'])->middleware('auth');


Route::get('/books', [BookController::class, 'index'])->middleware('auth');
Route::get('/books/show/{id}', [BookController::class, 'show'])->middleware('auth');
Route::get('/books/create', [BookController::class, 'create'])->middleware('auth');
Route::post('/books/store', [BookController::class, 'store'])->middleware('auth');

Route::get('/register', [AuthController::class, 'registerForm'])->middleware('guest');;
Route::post('/register', [AuthController::class, 'register'])->middleware('guest');;
Route::get('/login', [AuthController::class, 'loginForm'])->middleware('guest');;
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');;
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');


//Auth
Route::get('/users', [UserController::class, 'index'])->middleware(['auth', 'is-admin']);










// Route::get('/test', function () {

//     $cats = Cat::all();
//     foreach ($cats as $cat) {
//         echo $cat->name .'<br>';
//     }
// });



//لو عاوز اجيب حاجه واحدهب اسمها

// Route::get('/test', function () {
//     $res = Cat::where('name', '=', 'programing')->get();
//     dd($res);
// });


// ليمت واحد بس بتكتب get عشان لو راجع اكتر من عمود
// $res = Cat::orderBy('id', 'DESC')->take(1)->get();

// ليمت واحد بس بتكتب get  عشان لو راجع عمودواحد
// $res = Cat::orderBy('id', 'DESC')->first();

// Route::get('/test', function () {
//     $res = Cat::orderBy('id', 'DESC')->first();
//     dd($res);
// });
