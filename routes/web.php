<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndentController;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('landing');
});

// Route::get('/', [IndentController::class, 'index']);
// Route::post('/indent', [IndentController::class, 'store'])->name('indent.store');
// Route::get('/indents/{id}/cetak', [IndentController::class, 'cetak'])->name('indents.cetak');
