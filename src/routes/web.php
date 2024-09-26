<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;

Route::get('/test/{text}', [TestController::class, 'index']);               //デフォルト

// Route::get('/test/{room}/{id}', function ($room,$id) {                   問1
//     return 'roomが' . $room . 'でidは' . $id . 'です';
// });

// Route::get('/test', function () {                                        問2
//     return 'Goodmorning=おはようございます';
// });
// Route::get('/test/Bonjour', function () {
//     return 'Bonjour=おはようございます';
// });

// Route::get('/test/{greeting?}', function ($greeting = 'Goodmorning') {                                //問2解答
//     return $greeting . '=おはようございます';
// });

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/', [TestController::class, 'index']);