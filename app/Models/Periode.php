<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama",
        "tahun"
    ];

    public function getRangeAttribute()
    {
        if ($this->nama == "q1") {
            return [
                "01 januari " . $this->tahun,
                "31 maret " . $this->tahun,
            ];
        } elseif ($this->nama == "q2") {
            return [
                "01 april " . $this->tahun,
                "31 juni " . $this->tahun,
            ];
        } elseif ($this->nama == "q3") {
            return [
                "01 juli " . $this->tahun,
                "31 september " . $this->tahun,
            ];
        } else {
            return [
                "01 oktober " . $this->tahun,
                "31 desember " . $this->tahun,
            ];
        }
    }
}