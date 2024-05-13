<?php

namespace App\Models;

use App\Models\Pivot\CartProducts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class cart extends Model
{
    protected $fillable = [
        'user_id',
        'item_count',
        'total',
        'tax',
        'is_paid',
    ];

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany
        (products::class)
            ->using(CartProducts::class);

    }
}
