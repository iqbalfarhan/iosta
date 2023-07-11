<?php

namespace App\Http\Livewire\Pages;

use App\Models\Lokasi;
use App\Models\Peruntukan;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ObjectSewa extends Component
{
    public $cari;
    public function hapusPeruntukan(Peruntukan $peruntukan)
    {
        $peruntukan->delete();
    }

    public function downloadba(Peruntukan $peruntukan)
    {
        $filename = implode(" ", [
            $peruntukan->lokasi->nama,
            '-',
            $peruntukan->peruntukan,
        ]);

        return Storage::download($peruntukan->fileba, $filename);
    }

    public function render()
    {
        return view('livewire.pages.object-sewa', [
            'datas' => Peruntukan::when($this->cari, function ($q) {
                $q->where('peruntukan', 'like', '%' . $this->cari . '%')
                    ->where('fungsi', 'like', '%' . $this->cari . '%')
                    ->where('status', 'like', '%' . $this->cari . '%')
                    ->where('klasifikasi', 'like', '%' . $this->cari . '%');
            })->get()
        ]);
    }
}