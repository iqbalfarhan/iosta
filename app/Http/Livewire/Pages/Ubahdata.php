<?php

namespace App\Http\Livewire\Pages;

use App\Models\Lokasi;
use App\Models\Peruntukan;
use Livewire\Component;
use Livewire\WithFileUploads;

class Ubahdata extends Component
{
    use WithFileUploads;

    public $queryString = [
        'peruntukan'
    ];

    protected $fillable = [
        'reload' => '$refresh'
    ];
    public $lokasi;
    public $lokasi_id;
    public $peruntukan;
    public $jenis;
    public $luas;
    public $fileba;

    public function updatedLokasiId($lokasi_id)
    {
        $this->lokasi = Lokasi::find($lokasi_id);
        $this->peruntukan = "";
    }

    public function updatedPeruntukan($peruntukan)
    {
        $data = Peruntukan::find($peruntukan);
        $this->jenis = $data->klasifikasi;
    }

    public function mount()
    {
        $data = Peruntukan::find($this->peruntukan);

        if ($this->peruntukan) {
            $this->lokasi_id = $data->lokasi_id;
            $this->lokasi = $data->lokasi;

            $this->jenis = $data->klasifikasi;
        }
    }

    public function simpan()
    {
        $this->validate([
            'peruntukan' => 'required',
            'jenis' => 'required',
            'luas' => 'required',
            'fileba' => 'required',
        ]);

        $filename = $this->fileba->hashName('barekon');
        $this->fileba->store('barekon');

        $data = Peruntukan::find($this->peruntukan);

        $data->update([
            'fileba' => $filename,
            'luas' => $this->luas
        ]);

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.pages.ubahdata', [
            'gedungs' => Lokasi::whereIn('witel', auth()->user()->accessable_witel)->get()->pluck('nama', 'id'),
            'peruntukans' => $this->lokasi ? $this->lokasi->peruntukans->pluck('peruntukan', 'id') : null,
        ]);
    }
}