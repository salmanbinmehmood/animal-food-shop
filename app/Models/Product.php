<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Product_category::class, 'category_id');
}

    public function product_images()
{
        return $this->hasMany(Product_image::class, 'product_id');
}
    public function topSellingProducts()
{
        return $this->hasMany(Topselling::class, 'product_id');
}

}
