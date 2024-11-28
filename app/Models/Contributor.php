<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contributor extends Model
{
    /** @use HasFactory<\Database\Factories\ContributorFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'membership_id',
        'phone_number',
        'is_member',
        'suburb',
        'denomination',
        'picture_path',
        'user_id'
    ];


    /**
     * payments
     *
     * @return HasMany
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, 'contributor_id');
    }



    /**
     * registered_by
     *
     * @return BelongsTo
     */
    public function registered_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
