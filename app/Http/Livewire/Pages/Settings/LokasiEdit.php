<?php

namespace App\Http\Livewire\Pages\Settings;

use Intervention\Image\Facades\Image;
use App\Models\Lokasi;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class LokasiEdit extends Component
{
    use WithFileUploads;

    protected $listeners = [
        'toggleEditLokasiModal'
    ];
    public $show = false;
    public $data;
    public $witel;
    public $kota;
    public $alamat;
    public $nama;
    public $photo;
    public $eviden;

    public function toggleEditLokasiModal()
    {
        $this->show = !$this->show;
    }

    public function mount(Lokasi $lokasi)
    {
        $this->data = $lokasi;

        $this->witel = $lokasi->witel;
        $this->kota = $lokasi->kota;
        $this->alamat = $lokasi->alamat;
        $this->nama = $lokasi->nama;
        $this->photo = $lokasi->photo;
    }

    public function simpan()
    {
        $this->validate([
            "witel" => 'required',
            "kota" => 'required',
            "alamat" => 'required',
            "nama" => 'required',
            "eviden" => '',
        ]);

        $photo = $this->photo;

        if ($this->eviden) {
            $gambar = $this->eviden;

            if ($this->photo != null) {
                Storage::delete($this->photo);
            }

            $photo = $gambar->hashName("lokasi");
            $image = Image::make($gambar)->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::put($photo, (string) $image->encode());
        }

        $this->data->update([
            'witel' => $this->witel,
            'kota' => $this->kota,
            'alamat' => $this->alamat,
            'nama' => $this->nama,
            'photo' => $photo,
        ]);

        $this->emit('reload');

        $this->reset([
            'eviden'
        ]);
    }

    public function render()
    {
        return view('livewire.pages.settings.lokasi-edit');
    }
}