<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware' => 'api',
        'namespace'  => 'App\Http\Controllers'
    ],
    function ($router) {
        Route::post('login', 'AuthController@login');
        Route::post('register', 'AuthController@register');
        Route::post('logout', 'AuthController@logout');
        Route::get('profile', 'AuthController@profile');
        Route::post('refresh', 'AuthController@refresh');
    }
);

