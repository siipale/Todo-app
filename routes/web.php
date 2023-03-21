<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;

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
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/task-editor', [App\Http\Controllers\TaskController::class, 'taskEditor'])->name('task-editor');

Route::get('add-task-form', [App\Http\Controllers\TaskController::class, 'taskEditor']);

Route::post('/task/store', [App\Http\Controllers\TaskController::class, 'storeTask'])->name('store-task');

Route::get('/tasklist', function () {
    $data['tasks'] = Task::all();
    return view('tasklist')->with('data', $data);
});