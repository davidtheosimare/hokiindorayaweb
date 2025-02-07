<?php

use App\Livewire\About;
use App\Livewire\Career;
use App\Livewire\Contact;
use App\Livewire\Homepage;
use App\Livewire\Login;
use App\Livewire\Product;
use App\Livewire\Project;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::get("/", Homepage::class);
Route::get("/home", Homepage::class);
Route::get("/product", Product::class);
Route::get("/about", About::class);
Route::get("/project", Project::class);
Route::get("/contact", Contact::class);
Route::get("/career", Career::class);
Route::get("/login", Login::class);
Route::get("/register", Register::class);
