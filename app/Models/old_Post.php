<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{
    // public static function all()
    // {
    //     return [
    //         [
    //             'id' => 1,
    //             'slug' => 'judul-artikel',
    //             'title' => 'Judul Artikel',
    //             'author' => 'Jip jipp',
    //             'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    //                         Sed do eiusmod tempor incididunt ut labore et dolore
    //                         magna aliqua.',
    //             'date' => '12 December 2025'
    //         ],
    //         [
    //             'id' => 2,
    //             'slug' => 'kisah-pilu',
    //             'title' => 'Kisah pilu',
    //             'author' => 'yahh ini dia',
    //             'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    //                         Sed do eiusmod tempor incididunt ut labore et dolore
    //                         magna aliqua.',
    //             'date' => '11 December 2025'
    //         ]
    //     ];
    // }
    // public static function find($slug): array
    // {
    //     $posts = static::all();
    //     // return Arr::first($posts, function ($post) use ($slug) {
    //     //     return $post['slug'] == $slug;
    //     // });
    //     $checked =  Arr::first($posts, fn($post) => $post['slug'] == $slug);
    //     if (!$checked) {
    //         return abort(404);
    //     }
    //     return $checked;
    // }

    // protected $table = 'blog_posts'; 
    // protected $primaryKey = 'posts_id';
    protected $fillable = ['title', 'slug', 'author', 'body'];
}
 