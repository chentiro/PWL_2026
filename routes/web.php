<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang!';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'NIM: 254107023001 <br>
    Nama: Silva Tria Alfares';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});


Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($articlesId) {
    return "Halaman Artikel dengan ID {$articlesId}";
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});
