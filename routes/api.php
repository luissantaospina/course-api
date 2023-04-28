<?php

use App\Http\Controllers\Course\CourseController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::get('courses', [CourseController::class, 'index']);
    Route::post('courses', [CourseController::class, 'store']);
    Route::get('course/{id}', [CourseController::class, 'show']);
    Route::delete('course/{id}', [CourseController::class, 'destroy']);
    Route::put('course/{id}', [CourseController::class, 'update']);
});
