<?php

use App\Http\Controller\authenticateController;
use App\Http\Controller\usersController;
use Illuminate\Support\Facades\Route;
use App\Model\Users;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('demo');
});

// Route::get('', function(){
//     return view('');
// });

Route::post('/signup',[authController::class'addUser']);
Route::post('/login',[authController::class'loginUser']);
Route::post('/logoutUser',[authController::class,'logoutUser']);
// Route::get('/account',[userController::class,'show']);

Route::get('/index',[userController::class'dashboard']);
Route::get('/noside',[userController::class'nside']);
Route::get('/rightside',[userController::class'rside']);
Route::get('/leftside',[userController::class'lside']);
Route::get('/login',[userController::class'userlogin']);
Route::get('/signup',[userController::class'register']);
Route::get('/account',[userController::class'useracc']);

