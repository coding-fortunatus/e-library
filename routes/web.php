<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', function () {
    return view('dashboard.admin.dashboard');
});

Route::get('/staff/dashboard', function () {
    return view('dashboad.staff.dashboard');
});

Route::get('/student/dashboard', function () {
    return view('dashboad.student.dashboard');
});
