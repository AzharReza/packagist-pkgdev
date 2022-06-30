<?php


use Illuminate\Support\Facades\Route;

Route::get('test1', function (){ echo 'Hello its from Test Package Development!'; });
Route::get('test', [\Cas\Pkgdev\TestController::class, 'test']);
