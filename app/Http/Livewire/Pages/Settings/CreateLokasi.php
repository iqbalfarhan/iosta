<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\Lokasi;
use Livewire\Component;

class CreateLokasi extends Component
{
    public $witel;
    public $kota;
    public $alamat;
    public $nama;
    public $fungsi;

    protected $listeners = [
        'toggleShow'
    ];

    public $show = false;

    public function toggleShow()
    {
        $this->show = !$this->show;
    }

    public function simpan()
    {
        $valid = $this->validate([
            'witel' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'nama' => 'required',
            'fungsi' => 'required',
        ]);

        Lokasi::create($valid);

        $this->reset([
            'witel',
            'kota',
            'alamat',
            'nama',
            'fungsi',
        ]);

        $this->emit('reload');
        $this->toggleShow();

    }

    public function render()
    {
        return view('livewire.pages.settings.create-lokasi');
    }
}