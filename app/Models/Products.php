<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    public function category()
{
    return $this->belongsTo(Categories::class, 'category_id', 'id');
}
}
