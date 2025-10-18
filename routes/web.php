<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    $npm = [123,124,125,126];
    $nama = ['Silvi Rahmawati','Fira Alifia Putri','Uswatun Hasanah','Rasheed Al Ghifari Akbar'];
    $jumlah = count($npm);
    return view('mahasiswa',compact('npm','jumlah','nama'));
});

Route::get('profile', function () {
    $nama = 'Silvi';
    return view('profile', compact('nama'));
});