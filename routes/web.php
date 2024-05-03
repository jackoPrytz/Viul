<?php

use App\Livewire\Home;
use App\Livewire\Nosotros;
use App\Livewire\Productos;
use App\Livewire\Servicios;
use Illuminate\Support\Facades\Route;

Route::get('/nosotros', Nosotros::class)->name('nosotros');

Route::get('/', Home::class)->name('home');

Route::get('/productos', Productos::class)->name('productos');

Route::get('/servicios', Servicios::class)->name('servicios');
