<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Exceptions\EndLessPeriodException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'witel',
        'password',
        'darkmode',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getFirstNameAttribute()
    {
        $name_parts = explode(" ", $this->name);
        return $name_parts[0];
    }

    public function getInitialAttribute(): string
    {
        $words = explode(" ", $this->name);
        $initials = "";

        foreach ($words as $word) {
            $initials .= strtoupper($word[0]);
            if (strlen($initials) >= 2) {
                break;
            }
        }

        return $initials;
    }

    public function getAccessableWitelAttribute()
    {
        if ($this->witel == "REGIONAL") {
            return config('ios.listWitel');
        } else {
            return [$this->witel];
        }
    }
}