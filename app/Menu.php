<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    public function parentMenu()
    {
        return $this->hasMany('App\Menu', 'parent_id');
    }
}
