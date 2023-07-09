<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'witel',
        'kota',
        'alamat',
        'nama',
    ];

    public function peruntukans()
    {
        return $this->hasMany(Peruntukan::class);
    }
}