<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peruntukan extends Model
{
    use HasFactory;

    protected $fillable = [
        'lokasi_id',
        'fungsi',
        'klasifikasi',
        'peruntukan',
        'luas',
        'status',
        'durasi',
        'layanan',
        'fileba',
    ];

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class);
    }
}