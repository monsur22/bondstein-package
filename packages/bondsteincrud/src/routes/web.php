<?php

namespace Bondstein\Crud\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest', 'web'])->group(function () {
    Route::get('/todos', [TodoController::class, 'index']);
    Route::get('/todos/create', [TodoController::class, 'create']);
    Route::post('/todos/store', [TodoController::class, 'store'])->name('todos.store');
    Route::get('/todos/{id}/edit', [TodoController::class, 'edit'])->name('todos.edit');
    Route::put('/todos/{id}/update', [TodoController::class, 'update'])->name('todos.update');
    Route::delete('/todos/{id}/delete', [TodoController::class, 'destroy'])->name('todos.destroy');
});
