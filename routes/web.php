<?php

use App\Modules\contact\Http\Controller\ContactController;
use Illuminate\Support\Facades\Route;

Route::group( [ 'namespace' => 'App\Modules\contact\Http\Controller',
    'as' => 'contact.',
    'middleware' => ['web']
], function(){
    Route::get('/contact', [ContactController::class,'index']);
    Route::post('/contact', [ContactController::class,'create'])->name('send');
});
