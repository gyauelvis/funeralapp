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
        'gender',
        'phone_number',
        'is_member',
        'suburb',
        'denomination',
        'picture_path',
        'user_id',
        'clan',
        'father',
        'mother',
        'hometown',
        'contact_person_name',
        'contact_person_number'
    ];

    public static function clans()
    {
        return [
            ['value' => 'OYOKO', 'name' => 'Oyoko'],
            ['value' => 'AGONA', 'name' => 'Agona'],
            ['value' => 'BRETUO', 'name' => 'Bretuo'],
            ['value' => 'ASOMAKOMA', 'name' => 'Asomakoma'],
            ['value' => 'ASONA', 'name' => 'Asona'],
            ['value' => 'ABRADE', 'name' => 'Abrade'],
            ['value' => 'EKUONA', 'name' => 'Ekuona'],
            ['value' => 'ADUANA', 'name' => 'Aduana']
        ];
    }


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
