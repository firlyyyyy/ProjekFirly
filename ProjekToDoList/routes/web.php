<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodosController::class, 'index'])->name('todo.home');

Route::get('/create', function () {
    return view('create');
})->name('todo.create');

Route::get('/edit/{id}', [TodosController::class, 'edit'])->name('todo.edit');

Route::post('/update', [TodosController::class, 'update'])->name('todo.update');

Route::post('/create', [TodosController::class, 'store'])->name('todo.store');

Route::get('/delete/{id}', [TodosController::class, 'destroy'])->name('todo.delete');
