<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;
    protected $fillable = [
        'amount',
        'payment_type',
        'purpose',
        'month',
        'year',
        'purpose',
        'contributor_id',
    ];

    /**
     * contributor
     *
     * @return BelongsTo
     */
    public function contributor(): BelongsTo
    {
        return $this->belongsTo(Contributor::class);
    }
}
