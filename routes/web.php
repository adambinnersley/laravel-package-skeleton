<?php

use Illuminate\Support\Facades\Route;
use VendorName\MyPackageName\Http\Controllers\ExampleController;

Route::get('/example', [ExampleController::class, 'index'])->name('example.index');
Route::get('/example/{id}', [ExampleController::class, 'show'])->whereNumber('id')->name('example.show');
Route::post('/example', [ExampleController::class, 'store'])->name('example.show');
