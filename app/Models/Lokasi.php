<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Lokasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'witel',
        'kota',
        'alamat',
        'nama',
        'photo',
    ];

    protected $appends = [
        'gambar'
    ];

    public function peruntukans()
    {
        return $this->hasMany(Peruntukan::class);
    }

    public function getGambarAttribute()
    {
        if ($this->photo) {
            return Storage::url($this->photo);
        }
        return Storage::url('noimage.png');

    }
}