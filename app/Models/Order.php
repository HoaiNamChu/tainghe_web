<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
        'province_code',
        'district_code',
        'ward_code',
        'address_detail',
        'shipping_address',
        'total_amount',
        'discount_amount',
        'coupon_id',
        'status',
        'payment_method_id',
        'payment_status',
        'shipping_provider_id',
        'tracking_code',
        'shipping_fee',
        'note',
    ];

//    protected $casts = [
//        'status' => 'enum',
//        'payment_status' => 'enum',
//    ];
}
