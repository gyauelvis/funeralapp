<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description'];

    /**
     * contribution
     *
     * @return HasMany
     */
    public function contributions(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
