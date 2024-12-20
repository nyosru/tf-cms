<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/counter', Counter::class);

$d = function () {
    Route::get('buh/scheta', \App\Livewire\Cms2\BuhScheta::class)
        ->name('sheta');
    Route::get('buh/uslugi', \App\Livewire\Cms2\BuhUslugi::class)
        ->name('uslugi');
    Route::get('buh/zakazs', \App\Livewire\Cms2\BuhZakaz::class)
        ->name('zakazs');
};

Route::group([
    'as' => 'buh.',
//    'domain' => (env('APP_ENV', 'local') == 'local') ? 'php-cat.local' : 'php-cat.com'
], $d);

//Route::group([
//    'as' => 'phpcat1.',
//    'domain' => (env('APP_ENV', 'local') == 'local') ? '1.php-cat.local' : '1.php-cat.com'
//], $d);


Route::get('/', function () {
    return view('welcome');
});
