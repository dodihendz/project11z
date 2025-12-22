<?php

use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Nurul']);
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Blog",
        'posts' => Post::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // dd($id); //debugging to see if the id is captured correctly
    // $posts = Post::all();

    // $post = collect($posts)->firstWhere('id', $id);
    // $post = Arr::first($posts, fn ($post) => $post['id'] == $id); //arrow function
    // $post = Arr::first($posts, function ($post) use ($slug) {          //anonymous function and must using 'use' to access $id variable
    //     return $post['slug'] == $slug;
    // });

    // $post = Post::find($slug);

    // dd($post); //debugging data already ok or not
    return view('post', [
        'title' => 'single post',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' => count($user->posts) . 'Articels by' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => 'Category by ' . $category->name,
        'posts' => $category->posts
    ]);
});
