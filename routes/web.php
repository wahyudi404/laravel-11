<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'title' => 'Home Page'
    ];

    return view('welcome', $data);
})->name('home');

Route::get('/about', function () {
    $data = [
        'title' => 'About',
        'name' => 'John Doe'
    ];

    return view('about', $data);
})->name('about');

Route::get('/blog', function () {
    $data = [
        'title' => 'Blog',
        'posts' => Post::all(),
    ];

    return view('blog', $data);
})->name('blog');

Route::get('/blog/{post:slug}', fn(Post $post) => view('blog-detail', [
    'title' => 'Detail Blog', 
    'post' => $post
]))->name('blog.detail');

Route::get('users/{user:username}', fn(User $user) => view('blog', [
    'title' => count($user->posts) . " Articles By " . $user->name,
    'posts' => $user->posts
]))->name('blog.by-user');

Route::get('categories/{category:slug}', fn(Category $category) => view('blog', [
    'title' => "Articles: " . $category->name,
    'posts' => $category->posts
]))->name('blog.by-category');

Route::get('/contact', function () {
    $data = [
        'title' => 'Contact'
    ];

    return view('contact', $data);
})->name('contact');
