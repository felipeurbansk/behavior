<?php

namespace LaraDev;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    // protected $fillable = ['title', 'slug', 'subtitle', 'description', 'publish_at'];
    protected $fillable = ['title', 'subtitle', 'description'];

}
