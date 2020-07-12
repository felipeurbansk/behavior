<?php

namespace LaraDev;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    // protected $fillable = ['title', 'subtitle', 'description'];
    protected $fillable = ['title', 'slug', 'subtitle', 'description', 'publish_at'];

    public const RELATIONSHIO_POST_CATEGORY = 'post_category';

    public function user() {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    public function categories() {
        return $this->belongsToMany(Category::class, self::RELATIONSHIO_POST_CATEGORY, 'post', 'category');
    }

    public function comments() {
        return $this->morphMany(Comment::class, 'item');
    }

    // public function getAttrAttribute() {
    //     return date('d/m/Y H:i', strtotime($this->created_at));
    // }

    // public function setAttrAttribute($value) {
    //     $this->attributes['title'] = $value;
    //     $this->attributes['slug'] = str_slug($value);
    // }

    public function getCreatedFmtAttribute() {
        return date('d/m/Y H:i', strtotime($this->created_at));
    }

    public function setTitleAttribute($value) {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

}
