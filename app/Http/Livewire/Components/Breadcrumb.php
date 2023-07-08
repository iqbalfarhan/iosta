<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;


class Breadcrumb extends Component
{
    public function render()
    {
        $segments = explode('/', \Request::path());
        return view('livewire.components.breadcrumb', [
            'datas' => $segments
        ]);
    }
}