<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MutatorController;
use App\Http\Controllers\TestMailController;

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
//     return view('auth.login');
// });

//For job $ queue
//Route::get('/mail/{mail}', [TestMailController::class, 'index']);
//for mail
//Route::get('/', [TestMailController::class, 'mail']);
//Route::get('/', [TestMailController::class, 'test']);



//get data for task insertion
// Route::get('/add', [TaskController::class, 'add_tasks']);
// //show data of users related task
// Route::get('/user-task', [TaskController::class, 'show_task']);
// //show data of company related task
// Route::get('/company-task', [TaskController::class, 'show_task1']);

// //get data for user insertion
// Route::get('/user', [UserController::class, 'add_users']);
// //show data of users
// Route::get('/show-user', [UserController::class, 'show_users']);

// //get data for company insertion
// Route::get('/company', [CompanyController::class, 'add_company']);
// //show data of company
// Route::get('/show-company', [CompanyController::class, 'show_company']);


// Route::get('/users', [UserController::class, 'add_users']);
// Route::get('/companies', [CompanyController::class, 'index']);
// Route::get('/tasks', [TaskController::class, 'index']);
//Route::get('/', [MutatorController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('show', [PostController::class, 'index']);
Route::post('add', [PostController::class, 'create']);
