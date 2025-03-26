<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use HasFactory, NodeTrait;

    protected $table = 'categories';

    protected $fillable = ['name', 'slug', 'description', 'parent_id'];

    public function products(){
        return $this->belongsToMany(Product::class, 'product_category', 'category_id', 'product_id');
    }
}
