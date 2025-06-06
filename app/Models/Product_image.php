<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    protected $fillable = [
        'product_id',
        'img_path',
        'is_active',
        'is_deleted',
    ];




    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


}
