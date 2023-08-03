<?php

namespace App\Http\Livewire\Widget;

use App\Helpers\Quartal;
use App\Models\Lokasi;
use App\Models\Peruntukan;
use Livewire\Component;

class StatQ extends Component
{
    public function render()
    {
        $quartal = Quartal::now()['code'];
        $alldata = Peruntukan::where('kode_q', $quartal)->count();
        $alllokasi = Lokasi::count();

        return view('livewire.widget.stat-q', [
            'periode' => Quartal::now(),
            'persen' => ceil(($alldata * $alllokasi) / 100),
            'datas' => Peruntukan::get()
        ]);
    }
}