<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class mealpreference extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'product_id',
        'name',
        'user_id',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(product::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
