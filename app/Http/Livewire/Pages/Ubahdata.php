<?php

namespace App\Http\Livewire\Pages;

use App\Helpers\Quartal;
use App\Models\LogPeruntukan;
use App\Models\Lokasi;
use App\Models\Peruntukan;
use Livewire\Component;
use Livewire\WithFileUploads;

class Ubahdata extends Component
{
    use WithFileUploads;

    public $lokasi_id;
    public $peruntukan_id;
    public $showDuplicateAlert = false;
    public $showAddPeruntukan = false;
    public $klasifikasi;
    public $newperuntukan = [
        'fungsi' => '',
        'klasifikasi' => '',
        'peruntukan' => '',
    ];
    public $fileba;
    public $luas;
    public $br;
    public $sc;
    public $status;
    public $durasi;
    public $layanan;

    protected $fillable = [
        'reload' => '$refresh'
    ];

    public function simpan()
    {
        $this->validate([
            'lokasi_id' => 'required',
            'peruntukan_id' => 'required',
            'luas' => 'required',
            'br' => '',
            'sc' => '',
            'status' => '',
            'durasi' => '',
            'layanan' => '',
            'fileba' => '',
        ]);

        if ($this->fileba) {
            $filename = $this->fileba->hashName('barekon');
            $this->fileba->store('barekon');
        }

        $create = [
            'kode_q' => Quartal::now()['code'],
            'peruntukan_id' => $this->peruntukan_id,
            'luas' => $this->luas,
            'br' => $this->br,
            'sc' => $this->sc,
            'status' => $this->status,
            'durasi' => $this->durasi,
            'layanan' => $this->layanan,
            'fileba' => $filename ?? null,
        ];

        LogPeruntukan::create($create);

        return redirect()->route('home');
    }

    public function addPeruntukan()
    {
        $valid = $this->validate([
            'lokasi_id' => 'required',
            "newperuntukan.fungsi" => "required",
            "newperuntukan.klasifikasi" => "required",
            "newperuntukan.peruntukan" => "required"
        ]);

        $valid['newperuntukan']['lokasi_id'] = $this->lokasi_id;

        Peruntukan::create($valid['newperuntukan']);

        $this->emit('reload');
        $this->reset([
            'showAddPeruntukan',
            'newperuntukan'
        ]);
    }

    public function render()
    {
        return view('livewire.pages.ubahdata', [
            'gedungs' => Lokasi::whereIn('witel', auth()->user()->accessable_witel)->get()->pluck('nama', 'id'),
            'peruntukans' => $this->lokasi_id ? Peruntukan::where('lokasi_id', $this->lokasi_id)->get()->pluck('peruntukan', 'id') : [],
            'quartal' => Quartal::now()
        ]);
    }
}