<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimesItem extends Model
{
    protected $fillable = ['title', 'image', 'description', 'categories_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
