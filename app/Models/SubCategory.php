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
        'name',
        'image',
        'image_alt',
        'category_id',
        'created_by',
        'updated_by',
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

    public function scopeSearch($q, $search)
    {
        $q->when($search, function ($q) use ($search) {
            $q->where(function ($q) use ($search) {
                // search by Sub Category Name
                $q->where('name_en', 'like', '%'.$search.'%')
                    ->orWhere('name_mm', 'like', '%'.$search.'%')

                    // search with Category Name (category_id)
                    ->orWhereHas('category', function ($q) use ($search) {
                        $q->where('name_en', 'like', '%'.$search.'%')
                            ->orWhere('name_mm', 'like', '%'.$search.'%');
                    })

                    // search with Username (updated_by)
                    ->orWhereHas('updatedBy', function ($q) use ($search) {
                        $q->where('name', 'like', '%'.$search.'%');
                    });
            });
        });
    }

    public function scopeStatus($q, $status)
    {
        $q->when($status !== null && $status !== 'all', function ($q) use ($status) {
            $q->where('status', $status);
        });
    }
}
