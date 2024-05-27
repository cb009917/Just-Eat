<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class meal_plan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'product_id',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsToMany(product::class);
    }
}
