<?php

use App\Http\Livewire\ListUser;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Turnos;
use App\Http\Livewire\User;

//Route::get('/', [User::class,'incrementar'])->name('user');
//Route::get('/turnos', Turnos::class)->name('turnos');
//Route::get('/list-user', ListUser::class)->name('list-user');
Route::get('/', function () {
    return view('welcome'); // o el nombre de tu vista principal
});
Route::get('/user', User::class)->name('user');
//

Route::get('/users', function () {
    return view('user');
})->name('users');

Route::get('/list', function () {
    return view('livewire.list-user');
})->name('list-user');

Route::get('/test-pdf', function () {
    $usuario = 'Denisse Cumbal';
    $cedula = '1721355061001';
    return view('ticket', compact('usuario', 'cedula'));
});
//Route::get('/turnos', Turnos::class)->name('turnos');
