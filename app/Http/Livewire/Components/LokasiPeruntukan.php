<?php

namespace App\Http\Livewire\Components;

use App\Helpers\Quartal;
use App\Models\Lokasi;
use App\Models\Peruntukan;
use Livewire\Component;

class LokasiPeruntukan extends Component
{
    protected $listeners = [
        'toggleShow'
    ];

    public $view = 'basic';
    public $show = false;
    public $template;
    public $lokasi;
    public $br;
    public $sc;
    public $fungsi;
    public $klasifikasi;
    public $peruntukan;
    public $luas;
    public $status = 'EXISTING';
    public $durasi;
    public $layanan;

    public function toggleShow()
    {
        $this->show = !$this->show;
    }

    public function updatedTemplate($text)
    {
        $parts = preg_split('/\t+/', $text);

        if ($text) {
            $this->fungsi = strtolower($parts[0]) ?? "";
            $this->luas = str_replace(',', '.', $parts[1]) ?? "";
            $this->br = $parts[2] ?? "";
            $this->sc = $parts[3] ?? "";
            $this->klasifikasi = $parts[4] ?? "";
            $this->klasifikasi = $parts[4] ?? "";
            $this->peruntukan = $parts[5] ?? "";
            $this->status = $parts[6] ?? "EXISTING";
            $this->durasi = $parts[9] ?? 3;
            $this->layanan = $parts[10] ?? 4;
        } else {
            $this->reset([
                'fungsi',
                'luas',
                'klasifikasi',
                'peruntukan',
                'status',
                'durasi',
                'layanan',
            ]);
        }
    }

    public function mount(Lokasi $lokasi)
    {
        $this->lokasi = $lokasi;
    }

    public function simpan(): void
    {
        $valid = $this->validate([
            'fungsi' => 'required',
            'klasifikasi' => 'required',
            'peruntukan' => 'required',
            'luas' => 'required',
            'br' => '',
            'sc' => '',
            'status' => 'required',
            'durasi' => 'required',
            'layanan' => 'required',
        ]);
        $valid['lokasi_id'] = $this->lokasi->id;
        $valid['kode_q'] = Quartal::now()['code'];
        Peruntukan::create($valid);
        $this->toggleShow();
        $this->emit('reload');
    }

    public function render()
    {
        return view('livewire.components.lokasi-peruntukan');
    }
}