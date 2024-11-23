<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all(): array 
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'John Doe',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione quae distinctio rerum magnam unde aliquid voluptas dolorem blanditiis velit minus dolorum aut modi, eum tempore vel asperiores doloribus libero ex.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Master Shifu',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita quod facilis. Maxime voluptatem autem, ut voluptatum voluptatibus sequi cupiditate debitis at adipisci delectus id cum animi minus porro mollitia.'
            ],
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(!$post) {
            abort(404);
        }

        return $post;
    }
}