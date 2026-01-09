<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    /** @use HasFactory<\Database\Factories\ProductAttributeFactory> */
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function productAttributeOptions()
    {
        return $this->hasMany(ProductAttributeOption::class);
    }
}
