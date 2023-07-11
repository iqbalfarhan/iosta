<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogPeruntukan extends Model
{
    use HasFactory;

    protected $fillable = [
        'peruntukan_id',
        'luas',
        'klasifikasi',
        'peruntukan',
        'fileba',
    ];

    public function peruntukan()
    {
        return $this->belongsTo(Peruntukan::class);
    }

    public function lokasi()
    {
        return $this->peruntukan->lokasi;
    }
}