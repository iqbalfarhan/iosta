<?php

namespace App\Http\Livewire\Widget;

use App\Helpers\Quartal;
use App\Models\LogPeruntukan;
use Livewire\Component;

class StatGedung extends Component
{
    public function render()
    {
        $code = Quartal::now()['code'];
        $logs = LogPeruntukan::where('kode_q', $code);
        $br = $logs->sum('br');
        $sc = $logs->sum('sc');
        return view('livewire.widget.stat-gedung', [
            'br' => $br,
            'sc' => $sc,
        ]);
    }
}