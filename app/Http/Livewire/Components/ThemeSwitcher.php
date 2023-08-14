<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ThemeSwitcher extends Component
{
    public $theme;

    public function mount()
    {
        $this->theme = auth()->user()->darkmode;
    }

    public function updateTheme($value)
    {
        $this->validate([
            'theme' => 'required'
        ]);

        auth()->user()->update([
            'darkmode' => $value == 'dark' ? true : false
        ]);

        $this->emit('reload');
        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.components.theme-switcher');
    }
}