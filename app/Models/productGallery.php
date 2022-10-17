<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $fillable = [
        'product_id',
        'photo',
        'is_deafult'
        
    ];

    protected $hidden = [

    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function getProductGallery($value) 
    {
        return url('storage/', $value);
    }
}
