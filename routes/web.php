<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TasksController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});
// Project Routes
Route::get('/view/projects', [ProjectsController::class, 'viewProject'])->name('viewProject');
Route::get('/add/project', [ProjectsController::class, 'addProject'])->name('addProject');
Route::post('/store/project', [ProjectsController::class, 'storeProject'])->name('storeProject');
Route::get('/edit/project/{id}', [ProjectsController::class, 'editProject'])->name('editProject');
Route::post('/update/project/{id}', [ProjectsController::class, 'updateProject'])->name('updateProject');
Route::get('/delete/project/{id}', [ProjectsController::class, 'deleteProject'])->name('deleteProject');
Route::get('/single/project/{id}', [ProjectsController::class, 'singleProject'])->name('singleProject');

// Tasks routes
Route::get('/view/task', [TasksController::class, 'viewTask'])->name('viewTask');
Route::get('/add/task', [TasksController::class, 'addTask'])->name('addTask');
Route::post('/store/task', [TasksController::class, 'storeTask'])->name('storeTask');
Route::get('/edit/task/{id}', [TasksController::class, 'editTask'])->name('editTask');
Route::post('/update/task/{id}', [TasksController::class, 'updateTask'])->name('updateTask');
Route::get('/delete/task/{id}', [TasksController::class, 'deleteTask'])->name('deleteTask');

Route::post('post-sortable', [TasksController::class, 'sortTable'])->name('sortTable');

