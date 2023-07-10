<?php

namespace App\Http\Livewire\Pages;

use App\Models\Lokasi;
use App\Models\Peruntukan;
use Livewire\Component;
use Livewire\WithFileUploads;

class Ubahdata extends Component
{
    use WithFileUploads;

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

        dd($filename, $data);
    }

    public function render()
    {
        return view('livewire.pages.ubahdata', [
            'gedungs' => Lokasi::where('witel', auth()->user()->witel)->get()->pluck('nama', 'id'),
            'peruntukans' => $this->lokasi ? $this->lokasi->peruntukans->pluck('peruntukan', 'id') : null,
        ]);
    }
}