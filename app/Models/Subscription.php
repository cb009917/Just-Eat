<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'start_date',
        'end_date',
        'status',
        'delivery_time',
        'delivery_date',
        'price',
        'preference',
        'Number_of_meals',
        'Number_of_servings',
        'delivery_address',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'delivery_date' => 'date',
    ];

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
