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
    $filters = request(['search', 'category', 'user']);
    $posts = Post::filter($filters)->latest()->paginate(9)->withQueryString();

    $data = [
        'title' => 'Blog',
        'posts' => $posts,
    ];

    return view('blog', $data);
})->name('blog');

Route::get('/blog/{post:slug}', function(Post $post) {
    return view('blog-detail', [
        'title' => 'Detail Blog', 
        'post' => $post
    ]);
})->name('blog.detail');

Route::get('users/{user:username}', function(User $user) {
    // $posts = $user->posts->load('category', 'user');
    return view('blog', [
        'title' => count($user->posts) . " Articles By " . $user->name,
        'posts' => $user->posts
    ]);
})->name('blog.by-user');

Route::get('categories/{category:slug}', function(Category $category) {
    // $posts = $category->posts->load('category', 'user');
    return view('blog', [
        'title' => "Articles: " . $category->name,
        'posts' => $category->posts
    ]);
})->name('blog.by-category');

Route::get('/contact', function () {
    $data = [
        'title' => 'Contact'
    ];

    return view('contact', $data);
})->name('contact');
