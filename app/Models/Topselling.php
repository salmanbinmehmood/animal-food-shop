<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topselling extends Model
{
    protected $fillable = [
        'title',
        'title',
        'product+id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
