<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributeOption extends Model
{
    /** @use HasFactory<\Database\Factories\ProductAttributeOptionFactory> */
    use HasFactory;

    protected $fillable = [
        'product_attribute_id',
        'name'
    ];

    public function productAttribute()
    {
        return $this->belongsTo(ProductAttribute::class);
    }

    public function productVariants()
    {
        return $this->belongsToMany(ProductVariant::class, 'product_variant_options');
    }
}
