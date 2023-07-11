<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogPeruntukan extends Model
{
    use HasFactory;

    protected $fillable = [
        'peruntukan_id',
        'luas_awal',
        'luas_baru',
        'klasifikasi_awal',
        'klasifikasi_baru',
        'peruntukan_awal',
        'peruntukan_baru',
        'fileba',
    ];

    public function peruntukan()
    {
        return $this->belongsTo(Peruntukan::class);
    }

    public function getPerubahanAttribute()
    {
        $perubahan = [];

        if ($this->luas_awal != $this->luas_baru) {
            $perubahan[] = "luas";
        }

        if ($this->klasifikasi_awal != $this->klasifikasi_baru) {
            $perubahan[] = "klasifikasi";
        }

        if ($this->peruntukan_awal != $this->peruntukan_baru) {
            $perubahan[] = "peruntukan";
        }

        return implode(", ", $perubahan);
    }

    public function lokasi()
    {
        return $this->peruntukan->lokasi;
    }
}