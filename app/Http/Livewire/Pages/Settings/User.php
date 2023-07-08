<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\User as UserModel;
use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return view('livewire.pages.settings.user', [
            'datas' => UserModel::get()
        ]);
    }
}