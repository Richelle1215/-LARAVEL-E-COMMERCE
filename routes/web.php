<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect']); 

Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');


Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');
  

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
    // Categories CRUD
    Route::resource('categories', CategoryController::class);
    // Products CRUD href="{{ route('admin.products.index') }}"
    Route::resource('products', ProductController::class); // Note: This is Admin\ProductController
});
// Other routes like profile, logout (as in your sidebar)
Route::get('/profile', function () { /* ... */ })->name('profile.show');
Route::post('/logout', function () { /* ... */ })->name('logout');


 Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
       Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
       Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
       Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
   });

Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('products', ProductController::class)->names('admin.products');
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');

Route::resource('admin/categories', CategoryController::class);
Route::resource('admin/products', ProductController::class);

Route::resource('admin/categories', CategoryController::class)->names('admin.categories');

Route::resource('products', ProductController::class);

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    
    // 1. Dashboard Route: This is the main view displaying both lists.
    Route::get('/', [ProductController::class, 'index'])->name('dashboard');

    // 2. Categories CRUD: We define the full resource routes, using the index 
    //    route (admin.categories.index) as an alias for the dashboard view.
    Route::resource('categories', CategoryController::class)->except(['show']);
    
    // 3. Products CRUD: We define the full resource routes. The index route 
    //    (admin.products.index) will also point to the main dashboard listing page.
    Route::resource('products', ProductController::class)->except(['show']);
});

// In your routes/web.php or routes/admin.php file
Route::get('/admin/products/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.products.create');


use Illuminate\Support\Facades\Auth;


/*
|---------------------------------------------------------------------------
| Compatibility logout route (GET) — for simple redirect after logout to welcome
| Note: Jetstream handles logout (POST). This GET route simply performs logout
| and redirects to the public welcome page. Keep both if you prefer.
*/
// resources/views/sidebar.blade.php line 39 is now defined
Route::resource('categories', App\Http\Controllers\CategoryController::class);

// Note: Awtomatikong dine-define nito ang 'categories.index' at iba pa.




Route::get('/logout', function () {
    Auth::logout();
    return redirect('/'); // Redirects to Welcome page
})->name('logout');


// ...
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// o (kung resource route)
Route::resource('categories', CategoryController::class);

// Halimbawa lang ito, kung ang prefix mo ay 'admin'
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // ... iba pang routes
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    // ... iba pang routes
});