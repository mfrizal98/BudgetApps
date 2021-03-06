<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\AjaxController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/new-budget', [ApplicationsController::class, 'create'])->name('new-budget');
Route::middleware(['auth:sanctum', 'verified'])->post('/new-budget', [ApplicationsController::class, 'store'])->name('applications.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/budget/{id}/edit', [ApplicationsController::class, 'edit'])->name('edit_application');
Route::middleware(['auth:sanctum', 'verified'])->post('/budget/edit', [ApplicationsController::class, 'update'])->name('applications.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/ajax/dt_application', [AjaxController::class, 'dt_application'])->name('dt_application');
Route::middleware(['auth:sanctum', 'verified'])->post('/ajax/view_application', [AjaxController::class, 'view_application'])->name('view_application');
Route::middleware(['auth:sanctum', 'verified'])->post('/ajax/update_application', [AjaxController::class, 'update_application'])->name('update_application');
Route::middleware(['auth:sanctum', 'verified'])->post('/ajax/delete_application', [AjaxController::class, 'delete_application'])->name('delete_application');


