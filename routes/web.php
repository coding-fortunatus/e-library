<?php

use Illuminate\Support\Facades\Route;

// Auth Routes
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

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

    // Admin settings
    Route::get('/settings', function () {
        return view('dashboard.admin.settings');
    })->name('admin-settings');
});

// 404 Page
Route::get('/error', function () {
    return view('404');
});


// Student Routes
Route::prefix('student')->group(function () {
    Route::get('/home', function () {
        return view('dashboard.student.homepage');
    })->name('homepage');

    Route::get('/articles', function () {
        return view('dashboard.student.articles');
    })->name('articles');

    Route::get('/journals', function () {
        return view('dashboard.student.journals');
    })->name('journals');

    Route::get('/textbooks', function () {
        return view('dashboard.student.textbooks');
    })->name('textbooks');

    Route::get('/lecturenotes', function () {
        return view('dashboard.student.lecturenotes');
    })->name('lecturenotes');

    Route::get('/slides', function () {
        return view('dashboard.student.slides');
    })->name('slides');

    Route::get('/profile', function () {
        return view('dashboard.student.profile');
    })->name('profile');
});

// Staff Routes
Route::prefix('staff')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboad.staff.dashboard');
    });
});

