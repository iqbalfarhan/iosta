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

    public function logs()
    {
        return $this->hasMany(LogPeruntukan::class)->latest();
    }

    public function lastlog()
    {
        return $this->hasOne(LogPeruntukan::class);
    }

    public function luasstatus()
    {
        $symbol = "";
        $color = "neutral";
        $diff = "0";

        if ($this->lastlog) {
            if ($this->lastlog->luas < $this->luas) {
                $symbol = "▲";
                $color = "success";
            } elseif ($this->lastlog->luas > $this->luas) {
                $symbol = "▼";
                $color = "error";
            }

            $diff = abs($this->lastlog->luas - $this->luas);
        }

        return [
            "symbol" => $symbol,
            "color" => $color,
            "diff" => $diff
        ];
    }
}