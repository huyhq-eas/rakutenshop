<?php

namespace RakutenShop\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    /**
     * Get the products for the categories.
     */
    public function category()
    {
        return $this->belongsTo('Rakutenshop\Models\Category');
    }
}
