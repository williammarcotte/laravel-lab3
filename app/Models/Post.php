<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(Author::class); //Post belongs to an Author
    }

    public function comments()
    {
        return $this->hasMany(Comment::class); // Post has many Comments
    }
}

