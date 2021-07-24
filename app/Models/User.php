<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function shows(): HasMany
    {
        return $this->hasMany(Show::class, 'creator_id');
    }

    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class, 'creator_id');
    }

    public function documentaries(): HasMany
    {
        return $this->hasMany(Documentary::class, 'creator_id');
    }

    public function podcasts(): HasMany
    {
        return $this->hasMany(Podcast::class, 'creator_id');
    }

    public function platforms(): HasMany
    {
        return $this->hasMany(Platform::class, 'creator_id');
    }
}
