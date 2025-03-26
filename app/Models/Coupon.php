<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $table = 'coupons';


    protected $fillable = [
        'code',
        'discount_value',
        'discount_type',
        'max_discount_value',
        'max_discount_percentage',
        'min_order_value',
        'usage_limit',
        'usage_count',
        'start_date',
        'end_date',
    ];
}
