<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
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

    return view('auth.login');
});
//User Dashboard
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function (){
    Route::get('/user_dashboard', function (){
        return view('user.user_home');
    })->middleware(['auth', 'user'])->name('user.user_dashboard');
});
// Admin Route
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function (){
    //Admin Dashboard
    Route::get('/admin_dashboard', function (){
        return view('admin.admin_dashboard');
    })->middleware(['auth', 'admin'])->name('admin.admin_dashboard');

    Route::resource('branchs', BranchController::class);
    Route::resource('teachers', TeacherController::class);
});
//Super User
Route::group(['middleware' => ['auth', 'superuser'], 'prefix' => 'superuser'], function (){
    //Super User Dashboard
    Route::get('/superuser_dashboard', function (){
        return view('superuser.superuser_dashboard');
    })->middleware(['auth', 'superuser'])->name('superuser.superuser_dashboard');
});


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
