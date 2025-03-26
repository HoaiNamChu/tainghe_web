<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'code',
        'name',
        'slug',
        'description',
        'image',
        'technical_spec',
        'is_active',
        'brand_id',
    ];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag', 'product_id', 'tag_id');
    }

    public function productMedias()
    {
        return $this->hasMany(ProductMedia::class, 'product_id', 'id');
    }

    public function productVariants()
    {
        return $this->hasMany(ProductVariant::class, 'product_id', 'id');
    }



    public function getTotalStockAttribute()
    {
        return $this->productVariants->sum('stock');
    }

    public function getPriceAttribute()
    {
        $variantsCount = $this->productVariants->count();

        if ($variantsCount === 0) {
            return 0; // Không có biến thể
        } elseif ($variantsCount === 1) {
            return $this->productVariants->first()->price; // Chỉ có 1 biến thể
        } else {
            $minPrice = $this->productVariants->min('price');
            $maxPrice = $this->productVariants->max('price');
            return [$minPrice, $maxPrice]; // Khoảng giá nếu có nhiều biến thể
        }
    }

    // Format giá để hiển thị
    public function getFormattedPriceAttribute()
    {
        $price = $this->price;

        if (is_array($price)) {
            return number_format($price[0], 0, ',', '.') . ' - ' . number_format($price[1], 0, ',', '.') . ' VNĐ';
        } elseif ($price > 0) {
            return number_format($price, 0, ',', '.') . ' VNĐ';
        } else {
            return 'Chưa có giá';
        }
    }
}
