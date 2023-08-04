<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barekon extends Model
{
    use HasFactory;

    protected $fillable = [
        'lokasi_id',
        'kode_q',
        'fileba',
    ];

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class);
    }
}