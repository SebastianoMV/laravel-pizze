<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::namespace('Api')
    ->prefix('pizzas')
    ->group(function(){
        Route::get('/', 'PageController@index');
        Route::get('/{slug}', 'PageController@show');
    });

