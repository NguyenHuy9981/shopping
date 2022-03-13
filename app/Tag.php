<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_tags', 'tag_id', 'product_id')
                    ->withTimestamps();
    }
    
}
