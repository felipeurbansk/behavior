<?php

namespace LaraDev;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    public function posts() {
        return $this->belongsToMany(Post::class, Post::RELATIONSHIO_POST_CATEGORY,  'category', 'post');
    }
}
