<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\TestQueueJob;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/queue', function () {
    TestQueueJob::dispatch();
    return view('welcome');
});
