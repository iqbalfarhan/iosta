<?php

namespace App\Http\Livewire\Pages;

use App\Models\LogPeruntukan;
use App\Models\Peruntukan;
use Livewire\Component;

class Tester extends Component
{

    public $datas;
    public $witels;
    public $cari;
    public $witel = "SAMARINDA";
    public $lokasi_id;
    public $fungsi;
    public $klasifikasi;
    public $peruntukan;
    public $status;

    public function render()
    {
        $datas = Peruntukan::with('lokasi')->when($this->peruntukan, function ($q) {
            $q->where('peruntukan', 'like', '%' . $this->peruntukan . '%');
        })->when($this->klasifikasi, function ($q) {
            $q->where('klasifikasi', $this->klasifikasi);
        })->when($this->fungsi, function ($q) {
            $q->where('fungsi', $this->fungsi);
        })->when($this->witel, function ($q) {
            $q->whereHas('lokasi', function ($subQuery) {
                $subQuery->where('witel', $this->witel);
            });
        })->get();

        dd($datas->toArray());

        return view('livewire.pages.tester');
    }
}