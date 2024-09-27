<?php

use Illuminate\Support\Facades\Route;

// Admin Routes
Route::prefix('admin')->group(function () {
    // Users routes
    Route::get('/dashboard', function () {
        return view('dashboard.admin.dashboard');
    })->name('admin-dashboard');

    Route::get('/staffs', function () {
        return view('dashboard.admin.staffs');
    })->name('manage-staff');

    Route::get('/students', function () {
        return view('dashboard.admin.students');
    })->name('manage-student');

    Route::get('/visitors', function () {
        return view('dashboard.admin.visitors');
    })->name('manage-visitor');

    // Library Resources
    Route::get('/articles', function () {
        return view('dashboard.admin.articles');
    })->name('resource-articles');
});


// Staff Routes
Route::prefix('staff')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboad.staff.dashboard');
    });
});

// Student Routes
Route::prefix('student')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboad.student.dashboard');
    });
});
