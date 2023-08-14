<?php

namespace App\Http\Livewire\Partial\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    protected $listeners = [
        'editUser'
    ];
    public $show = false;
    public $data;
    public $name;
    public $username;
    public $witel;
    public $role = "guest";

    function editUser(User $user)
    {
        $this->data = $user;
        $this->show = true;

        $this->name = $user->name;
        $this->username = $user->username;
        $this->witel = $user->witel;
        $this->role = $user->getRoleNames()->first();
    }

    public function simpan()
    {
        $valid = $this->validate([
            'name' => 'required',
            'username' => 'required',
            'witel' => 'required',
            'role' => 'required',
        ]);

        $user = User::find($this->data->id);
        $user->update($valid);

        $user->syncRoles($this->role);

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