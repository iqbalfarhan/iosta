<?php

namespace App\Http\Livewire\Peruntukan;

use App\Models\Lokasi;
use App\Models\Peruntukan;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $lokasi;
    public $lokasi_id;
    public $peruntukan_id;
    public $fungsi;
    public $klasifikasi;
    public $nama;

    public function simpan()
    {
        $this->validate([
            'lokasi_id' => 'required',
            'fungsi' => 'required',
            'klasifikasi' => 'required',
            'nama' => 'required',
        ]);

        Peruntukan::find($this->peruntukan_id)->update([
            'lokasi_id' => $this->lokasi_id,
            'fungsi' => $this->fungsi,
            'klasifikasi' => $this->klasifikasi,
            'peruntukan' => $this->nama,
        ]);

        return redirect()->route('settings.lokasi.detail', $this->lokasi_id);
    }

    public function mount(Peruntukan $peruntukan)
    {
        $this->peruntukan_id = $peruntukan->id;
        $this->lokasi_id = $peruntukan->lokasi_id;
        $this->fungsi = $peruntukan->fungsi;
        $this->klasifikasi = $peruntukan->klasifikasi;
        $this->nama = $peruntukan->peruntukan;
    }

    public function render()
    {
        return view('livewire.peruntukan.edit', [
            'lokasis' => Lokasi::whereIn('witel', auth()->user()->accessable_witel)->get()->pluck('nama', 'id')
        ]);
    }
}