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
    public $luas = 0;
    public $br = 0;
    public $sc = 0;
    public $status;
    public $durasi;
    public $layanan;
    public $fileba;

    public function simpan()
    {
        $this->validate([
            'lokasi_id' => 'required',
            'fungsi' => 'required',
            'klasifikasi' => 'required',
            'nama' => 'required',
            'luas' => 'required',
            'br' => 'required',
            'sc' => 'required',
            'status' => 'required',
            'durasi' => 'required',
            'layanan' => 'required',
            'fileba' => '',
        ]);

        if ($this->fileba) {
            $filename = $this->fileba->hashName('barekon');
            $this->fileba->store('barekon');

            Peruntukan::find($this->peruntukan_id)->update([
                'fileba' => $filename
            ]);
        }

        Peruntukan::find($this->peruntukan_id)->update([
            'fungsi' => $this->fungsi,
            'klasifikasi' => $this->klasifikasi,
            'peruntukan' => $this->nama,
            'luas' => $this->luas,
            'br' => $this->br,
            'sc' => $this->sc,
            'status' => $this->status,
            'durasi' => $this->durasi,
            'layanan' => $this->layanan,
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
        $this->luas = $peruntukan->luas;
        $this->br = $peruntukan->br;
        $this->sc = $peruntukan->sc;
        $this->status = $peruntukan->status;
        $this->durasi = $peruntukan->durasi;
        $this->layanan = $peruntukan->layanan;
    }

    public function render()
    {
        return view('livewire.peruntukan.edit', [
            'lokasis' => Lokasi::whereIn('witel', auth()->user()->accessable_witel)->get()->pluck('nama', 'id')
        ]);
    }
}