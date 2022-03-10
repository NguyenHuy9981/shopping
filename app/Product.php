<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function categories()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'product_tags', 'product_id', 'tag_id')
                    ->withTimestamps();
    }

    public function images()
    {
        return $this->hasMany('App\ProductImage');
    }
}
