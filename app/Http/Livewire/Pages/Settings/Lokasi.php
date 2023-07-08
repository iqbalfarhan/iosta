<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\Lokasi as LokasiModel;
use Livewire\Component;

class Lokasi extends Component
{
    public function render()
    {
        return view('livewire.pages.settings.lokasi', [
            'datas' => LokasiModel::get()
        ]);
    }
}