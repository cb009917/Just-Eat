<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'cart_id',
        'shipping_first_name',
        'shipping_last_name',
        'shipping_post_code',
        'shipping_address',
        'shipping_city',
        'shipping_mobile',
        'billing_first_name',
        'billing_last_name',
        'billing_post_code',
        'billing_address',
        'billing_city',
        'billing_mobile',
        'shipping_cost',
        'total',
        'payment_method',
    ];

    // GET THE USER WHO MADE THE ORDER
    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // GET THE CART ASSOCIATED WITH THE ORDER
    protected function cart(): BelongsTo
    {
        return $this->belongsTo(cart::class);
    }
}
