<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    // Allow mass-assignment for these fields
    protected $fillable = [
        'name',
        'description',
        'duration',
        'release_date',
        'rating',
        'genre_id',
        'language',
        'cast',
    ];

    // Relationships
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function favouritedBy()
    {
        return $this->belongsToMany(User::class, 'favourite');
    }

    public function watchlistedBy()
    {
        return $this->belongsToMany(User::class, 'watchlist');
    }
}
