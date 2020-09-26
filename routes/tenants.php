<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware(['web'])
    ->namespace('App\Http\Controllers')
    ->as('tenant.')
    ->group(function () {

        Route::get('/', function () {
            return view('tenants.welcome');
        });

        Route::get('/home', function () {
            return view('tenants.home');
        })->name('home');

        Route::get('/products', function () {
            $products = \App\Models\Tenant\Product::all();
            return view('tenants.products',['products'=>$products]);
        })->name('products');
    });
