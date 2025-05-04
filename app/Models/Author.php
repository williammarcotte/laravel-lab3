<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Author extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class); // One Author has many Posts
    }
}
