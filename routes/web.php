<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\PostComponent;


Route::get('/', function(){return view('layouts.app');})->name('index');

 //Route::get('/', PostComponent::class)->name('index'); //->middleware(['verified']);


 Route::get('/carousel', 'App\Http\Controllers\CarouselsController@index')->name('carousel');