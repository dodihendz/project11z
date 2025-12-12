<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Nurul']);
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Blog",
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel',
                'title' => 'Judul Artikel',
                'author' => 'Jip jipp',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.',
                'date' => '12 December 2025'
            ],
            [
                'id' => 2,
                'slug' => 'kisah-pilu',
                'title' => 'Kisah pilu',
                'author' => 'yahh ini dia',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.',
                'date' => '11 December 2025'
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});

Route::get('/posts/{slug}', function ($slug) {
    // dd($id); //debugging to see if the id is captured correctly
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel',
            'title' => 'Judul Artikel',
            'author' => 'Jip jipp',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.',
            'date' => '12 December 2025'
        ],
        [
            'id' => 2,
            'slug' => 'kisah-pilu',
            'title' => 'Kisah pilu',
            'author' => 'yahh ini dia',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.',
            'date' => '11 December 2025'
        ]
    ];

    // $post = collect($posts)->firstWhere('id', $id);
    // $post = Arr::first($posts, fn ($post) => $post['id'] == $id); //arrow function
    $post = Arr::first($posts, function ($post) use ($slug) {          //anonymous function and must using 'use' to access $id variable
        return $post['slug'] == $slug;
    });

    // dd($post); //debugging data already ok or not
    return view('post', [
        'title' => 'single post',
        'post' => $post
    ]);
});
