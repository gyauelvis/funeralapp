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
        'contributor_id',
        'user_id'
    ];

    protected $with = ['contributor', 'payment_made_to'];

    /**
     * contributor
     *
     * @return BelongsTo
     */
    public function contributor(): BelongsTo
    {
        return $this->belongsTo(Contributor::class);
    }



    /**
     * payment_made_to
     *
     * @return BelongsTo
     */
    public function payment_made_to(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
