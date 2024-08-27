<?php

use Illuminate\Support\Facades\Route;
use Filament\Http\Responses\Auth\LoginResponse;

// Route::get('/', function () {
//     return redirect()->route('filament.auth.login');
// });
Route::get('/', function () {
    return redirect('/admin/login'); // المسار الافتراضي لتسجيل الدخول الخاص بـ Filament
});
