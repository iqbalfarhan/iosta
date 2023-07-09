<?php

namespace App\Http\Livewire\Pages\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $data = [
        'username' => '196509',
        'password' => 'adminoke'
    ];

    public function submit()
    {
        $this->validate([
            'data.username' => 'required',
            'data.password' => 'required',
        ]);

        if (Auth::attempt($this->data)) {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('livewire.pages.auth.login');
    }
}