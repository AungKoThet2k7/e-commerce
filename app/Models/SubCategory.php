<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SubCategory extends Model
{
    /** @use HasFactory<\Database\Factories\SubCategoryFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "name",
        'image',
        'image_alt',
        "category_id",
        "created_by",
        "updated_by",
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn () => LaravelLocalization::getCurrentLocale() == 'en' ? $this->name_en : $this->name_mm ?? $this->name_en,
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
