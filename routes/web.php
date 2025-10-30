<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProxyController;

// Default welcome page
Route::get('/', function () {
    return view('welcome');
});

// Example proxy route
Route::get('/proxy', [ProxyController::class, 'loadSite']);

// =======================================================
// ⚙️ Maintenance Routes (for cPanel / no SSH access)
// =======================================================

// ✅ Clear all caches
Route::get('/clear-all', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    return '✅ All caches cleared successfully!';
});

// ✅ Optimize app (rebuild cache)
Route::get('/optimize-all', function () {
    Artisan::call('optimize');
    return '✅ Application optimized successfully!';
});

// ✅ Run migrations
Route::get('/run-migrate', function () {
    Artisan::call('migrate', ['--force' => true]);
    return '✅ Database migrated successfully!';
});

// ✅ Run seeders
Route::get('/run-seeder', function () {
    Artisan::call('db:seed', ['--force' => true]);
    return '✅ Database seeding completed!';
});

// ✅ Create storage link
Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return '✅ Storage linked successfully!';
});

// ✅ Check Laravel version
Route::get('/version', function () {
    return 'Laravel version: ' . app()->version();
});
