<?php

namespace App\Http\Livewire\Components;

use App\Models\Lokasi;
use App\Models\Peruntukan;
use Livewire\Component;

class LokasiPeruntukan extends Component
{
    protected $listeners = [
        'toggleShow'
    ];

    public $show = true;
    public $lokasi;
    public $fungsi;
    public $klasifikasi;
    public $peruntukan;
    public $luas;
    public $status = 'EXISTING';
    public $durasi = 3;
    public $layanan = 4;

    public function toggleShow()
    {
        $this->show = !$this->show;
    }

    public function mount(Lokasi $lokasi)
    {
        $this->lokasi = $lokasi;
        $this->show = $lokasi->peruntukans->count() == 0 ? true : false;
    }

    public function simpan(): void
    {
        $valid = $this->validate([
            'fungsi' => 'required',
            'klasifikasi' => 'required',
            'peruntukan' => 'required',
            'luas' => 'required',
            'status' => 'required',
            'durasi' => 'required',
            'layanan' => 'required',
        ]);
        $valid['lokasi_id'] = $this->lokasi->id;
        Peruntukan::create($valid);
        $this->toggleShow();
    }

    public function render()
    {
        return view('livewire.components.lokasi-peruntukan');
    }
}