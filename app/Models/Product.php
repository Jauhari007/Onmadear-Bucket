<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'image',
        'images',
        'is_best_seller',
        'is_new',
        'is_active',
        'whatsapp_click_count',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'images' => 'array',
        'is_best_seller' => 'boolean',
        'is_new' => 'boolean',
        'is_active' => 'boolean',
        'whatsapp_click_count' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function incrementWhatsAppClick()
    {
        $this->increment('whatsapp_click_count');
    }

    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeBestSeller($query)
    {
        return $query->where('is_best_seller', true);
    }

    public function scopeNew($query)
    {
        return $query->where('is_new', true);
    }
}
