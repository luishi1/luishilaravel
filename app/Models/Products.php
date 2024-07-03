<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    // use SoftDeletes; lol

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'price', 'state', 'brand_id', 'category_id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function priceWithTax($price)
    {
        $price = $price * 1.21;
        return $price;
    }

    public function categories()
    {
        return $this->belongsToMany(categories::class, 'categories_products', 'product_id', 'category_id')
            ->withPivot('id')
            ->withTimestamps();
    }
}

