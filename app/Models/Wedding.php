<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wedding extends Model
{
    use HasFactory;

    /**
     * Get all of the Wedding for the Wedding
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function post_photos(): HasMany
    {
        return $this->hasMany(PostPhoto::class);
    }

    protected $casts = [
        'images' => 'array',
    ];


}
