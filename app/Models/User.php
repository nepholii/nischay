<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Mass assignable attributes
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Hidden attributes for arrays (e.g. API responses)
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts for specific fields
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationships
     */

    // A user can favorite many movies
    public function favourites()
    {
        return $this->belongsToMany(Movie::class, 'favourite');
    }

    // A user can have many movies in their watchlist
    public function watchlist()
    {
        return $this->belongsToMany(Movie::class, 'watchlist');
    }
}
