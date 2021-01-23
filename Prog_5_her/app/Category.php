<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];

    public function animesItem()
    {
        return $this->hasMany(AnimesItem::class);
    }
}
