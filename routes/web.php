<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd(\Illuminate\Support\Facades\DB::table('users')->count());
});
