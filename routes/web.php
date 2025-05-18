<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\TestQueueJob;

Route::get('/', function () {
     TestQueueJob::dispatch();
    return view('welcome');
});
