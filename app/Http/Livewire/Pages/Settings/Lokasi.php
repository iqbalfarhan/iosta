<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\Lokasi as LokasiModel;
use Livewire\Component;

class Lokasi extends Component
{
    public $cari;
    public $witel;
    protected $listeners = [
        'reload' => '$refresh'
    ];

    public function hapusLokasi(LokasiModel $lokasi)
    {
        return $lokasi->delete();
    }

    public function render()
    {
        $datas = LokasiModel::withCount('peruntukans')->when($this->witel, function ($q) {
            $q->where('witel', $this->witel);
        })->when($this->cari, function ($q) {
            return $q->where('witel', 'like', '%' . $this->cari . '%')
                ->orWhere('kota', 'like', '%' . $this->cari . '%')
                ->orWhere('nama', 'like', '%' . $this->cari . '%');
        })->orderBy('witel')->get();

        return view('livewire.pages.settings.lokasi', [
            'datas' => $datas
        ]);
    }
}