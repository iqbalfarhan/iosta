<?php

namespace App\Http\Livewire\Pages;

use App\Models\Lokasi;
use App\Models\Peruntukan;
use Livewire\Component;

class ObjectSewa extends Component
{
    public function hapusPeruntukan(Peruntukan $peruntukan)
    {
        $peruntukan->delete();
    }

    public function render()
    {
        return view('livewire.pages.object-sewa', [
            'datas' => Peruntukan::get()
        ]);
    }
}