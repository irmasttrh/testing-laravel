<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/testing', function () {
    return view('admin/pages/testing/index');
});


Route::get('/testing/create', function () {
    return view('admin.pages/testing/create');
});

Route::get('/testing/show', function () {
    return view('admin.pages/testing/show');
});

Route::get('/testing/edit', function () {
    return view('admin.pages/testing/edit');
});