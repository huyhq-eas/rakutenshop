<?php

namespace RakutenShop\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    /**
     * Get the products for the category.
     */
    public function products()
    {
        return $this->hasMany('RakutenShop\Models\Product','genre_id','id');
    }
}
