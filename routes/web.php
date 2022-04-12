<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\OrderController;

// Rote UserController
Route::get('/',[UserController::class,'index'])->name('index');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'login_store'])->name('login.store');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
// Rote UserController

// Rote BusController
Route::get('/buses',[BusController::class,'index'])->name('buses');
Route::get('/buses/create',[BusController::class,'bus_create'])->name('bus.create');
Route::post('/buses/create',[BusController::class,'bus_store'])->name('bus.store');
Route::get('/buses/{id}/edit',[BusController::class,'bus_edit'])->name('bus.edit');
Route::put('/buses/{id}/edit',[BusController::class,'bus_update'])->name('bus.update');
Route::get('/buses/{id}/delete',[BusController::class,'bus_delete'])->name('bus.delete');
// Rote BusController

// Rote DriverController
Route::get('/driver',[DriverController::class,'index'])->name('driver');
Route::get('/driver/create',[DriverController::class,'driver_create'])->name('driver.create');
Route::post('/driver/create',[DriverController::class,'driver_store'])->name('driver.store');
Route::get('/driver/{id}/edit',[DriverController::class,'driver_edit'])->name('driver.edit');
Route::put('/driver/{id}/edit',[DriverController::class,'driver_update'])->name('driver.update');
Route::get('/driver/{id}/delete',[DriverController::class,'driver_delete'])->name('driver.delete');
// Rote DriverController

// Rote OrderController
Route::get('/order',[OrderController::class,'index'])->name('order');
Route::get('/order/create',[OrderController::class,'order_create'])->name('order.create');
Route::post('/order/create',[OrderController::class,'order_store'])->name('order.store');
Route::get('/order/{id}/edit',[OrderController::class,'order_edit'])->name('order.edit');
Route::put('/order/{id}',[OrderController::class,'order_update'])->name('order.update');
Route::get('/order/{id}/delete',[OrderController::class,'order_delete'])->name('order.delete');
// Rote orderController