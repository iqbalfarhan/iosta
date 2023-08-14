<?php

namespace App\Http\Livewire\Partial\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    protected $listeners = [
        'showCreateModal'
    ];
    public $show = false;
    public $name;
    public $username;
    public $witel;
    public $password = "iosta2023";
    public $role = "guest";

    function showCreateModal()
    {
        $this->show = true;
    }

    public function simpan()
    {
        $valid = $this->validate([
            'name' => 'required',
            'username' => 'required',
            'witel' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $valid['password'] = Hash::make($this->password);

        $new = User::create($valid);

        $new->assignRole($this->role);

        $this->emit('reload');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.partial.user.edit', [
            'roles' => Role::get()->pluck('name')
        ]);
    }
}