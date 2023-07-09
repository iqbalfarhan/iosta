<?php

namespace App\Http\Livewire\Pages;

use App\Models\Lokasi;
use Livewire\Component;

class Ubahdata extends Component
{
    public $lokasi_id;
    public $peruntukan;
    public $lokasi;

    public function updatedLokasiId($lokasi_id)
    {
        $this->lokasi = Lokasi::find($lokasi_id);
    }

    public function render()
    {
        return view('livewire.pages.ubahdata', [
            'gedungs' => Lokasi::where('witel', auth()->user()->witel)->get()->pluck('nama', 'id'),
            'peruntukans' => $this->lokasi ? $this->lokasi->peruntukans->pluck('peruntukan', 'id') : null,
        ]);
    }
}