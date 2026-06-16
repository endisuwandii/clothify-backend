<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'app' => config('app.name'),
        'api_version' => '1.0',
        'status' => 'Online'
    ]);
});
