<?php

namespace App\Http\Livewire\Logs;

use App\Models\LogPeruntukan;
use Livewire\Component;

class Edit extends Component
{

    public $log_id;
    public $kode_q;
    public $luas;
    public $br;
    public $sc;
    public $status;
    public $durasi;
    public $layanan;

    public function mount(LogPeruntukan $logperuntukan)
    {
        $this->log_id = $logperuntukan->id;

        $this->kode_q = $logperuntukan->kode_q;
        $this->luas = $logperuntukan->luas;
        $this->br = $logperuntukan->br;
        $this->sc = $logperuntukan->sc;
        $this->status = $logperuntukan->status;
        $this->durasi = $logperuntukan->durasi;
        $this->layanan = $logperuntukan->layanan;
    }

    public function simpan()
    {
        $valid = $this->validate([
            'kode_q' => 'required',
            'luas' => 'required',
            'br' => '',
            'sc' => '',
            'status' => '',
            'durasi' => '',
            'layanan' => '',
        ]);

        $log = LogPeruntukan::find($this->log_id);
        $log->update($valid);

        return redirect()->route('peruntukan.logs', $log->peruntukan->id);
    }


    public function render()
    {
        return view('livewire.logs.edit');
    }
}