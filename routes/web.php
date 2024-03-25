<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\RestaurantController as AdminRestaurantController;
use App\Http\Controllers\Admin\DishController as AdminDishController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\RedirectController as AdminRedirectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')
    ->name('admin.')
    ->prefix('/admin')
    ->group(function () {
        // rotte per i ristoranti
        Route::get('/restaurants', [AdminDashboardController::class, 'index'])->name('home');
        Route::post('/restaurants', [AdminRestaurantController::class, 'store'])->name('restaurants.store');
        Route::get('/restaurants/create', [AdminRestaurantController::class, 'create'])->name('restaurants.create');
        Route::get('/restaurants/restaurant-redirect', [AdminRedirectController::class , 'restaurantRedirect'])->name('restaurantRedirect');
        Route::get('/restaurants/menu-redirect', [AdminRedirectController::class , 'menuRedirect'])->name('menuRedirect');
        Route::get('/restaurants/{restaurant}', [AdminRestaurantController::class, 'show'])->name('restaurants.show');
        // rotte per i piatti
        Route::post('/dishes', [AdminDishController::class, 'store'])->name('dishes.store');
        Route::put('/dishes/{dish}', [AdminDishController::class, 'update'])->name('dishes.update');
        Route::get('/dishes/create', [AdminDishController::class, 'create'])->name('dishes.create');
        Route::get('/restaurants/{restaurant}/dishes', [AdminDishController::class, 'index'])->name('restaurants.dishes.index');
        Route::get('/dishes/{dish}', [AdminDishController::class, 'show'])->name('dishes.show');
        Route::get('/dishes/{dish}/edit', [AdminDishController::class, 'edit'])->name('dishes.edit');
        Route::delete('dishes/{dish}', [AdminDishController::class, 'destroy'])->name('dishes.destroy');

        Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index');
        Route::get('/orders-redirect', [AdminRedirectController::class, 'ordersRedirect'])->name('ordersRedirect');

    });