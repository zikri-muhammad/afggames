<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    public function product()
{
    return $this->hasMany(Products::class, 'category_id', 'id');
}
}
