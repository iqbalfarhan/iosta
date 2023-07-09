<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\Lokasi as LokasiModel;
use Livewire\Component;

class Lokasi extends Component
{
    public $cari;
    protected $listeners = [
        'reload' => '$refresh'
    ];

    public function hapusLokasi(LokasiModel $lokasi)
    {
        return $lokasi->delete();
    }

    public function render()
    {
        return view('livewire.pages.settings.lokasi', [
            'datas' => LokasiModel::withCount('peruntukans')->when($this->cari, function ($q) {
                return $q->where('witel', 'like', '%' . $this->cari . '%')
                    ->orWhere('kota', 'like', '%' . $this->cari . '%')
                    ->orWhere('nama', 'like', '%' . $this->cari . '%');
            })->orderBy('witel')->get()
        ]);
    }
}