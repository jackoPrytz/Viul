<?php

use App\Livewire\Contacto;
use App\Livewire\Home;
use App\Livewire\Productos;
use App\Livewire\Servicios;
use Illuminate\Support\Facades\Route;

Route::get('/contacto', Contacto::class)->name('contacto');

Route::get('/', Home::class)->name('home');

Route::get('/productos', Productos::class)->name('productos');

Route::get('/servicios', Servicios::class)->name('servicios');
