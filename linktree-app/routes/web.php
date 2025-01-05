<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\LinkController; 

Route::get('/', [App\Http\Controllers\LinkController::class, 'index'])->name('links.index');
Route::resource('/links', LinkController::class);
Route::post('/links/reorder', [LinkController::class, 'reorder'])->name('links.reorder');
Route::get('/preview', [LinkController::class, 'preview'])->name('links.preview');

?>