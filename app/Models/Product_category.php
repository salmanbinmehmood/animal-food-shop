<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category_desc',
        'img_path',
        'is_active',
        'is_deleted',
    ];
    public function products()
{
        return $this->hasMany(Product::class, 'category_id');
}



}
