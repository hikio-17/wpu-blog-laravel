<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fajri Muhammad Tio",
        "email" => "fajri@gmail.com",
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5KI_8r35-IJk3qnxHSNbG8SIuJ2UZluzRUc9RHajUpPpmr4WyvI-iSF9A6msMeFEHhLc&usqp=CAU"

    ]);
});

Route::get('/blog', [PostController::class, 'index']);


Route::get('/post/{post:slug}', [PostController::class, 'show']);