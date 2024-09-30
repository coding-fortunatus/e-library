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

    Route::get('/journals', function () {
        return view('dashboard.admin.journals');
    })->name('resource-journals');

    Route::get('/textbooks', function () {
        return view('dashboard.admin.textbooks');
    })->name('resource-textbooks');

    Route::get('/lecturenotes', function () {
        return view('dashboard.admin.lecturenotes');
    })->name('resource-lecturenotes');

    Route::get('/slides', function () {
        return view('dashboard.admin.slides');
    })->name('resource-slides');
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
