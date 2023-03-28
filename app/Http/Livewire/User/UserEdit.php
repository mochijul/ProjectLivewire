<?php

namespace App\Http\Livewire\User;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;

class UserEdit extends Component
{
    public $roles;
    public $user_id;
    public $name;
    public $email;
    public $role_id;

    public function mount($user)
    {
        $this->roles = Role::all();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role_id = $user->role_id;
        $this->user_id = $user->id;
    }

    public function update()
    {


        User::where('id', $this->user_id)
            ->update([
                'name' => $this->name,
                'email' => $this->email,
                'role_id' => $this->role_id,
            ]);
        return redirect()->route('manageuser');
    }

    public function render()
    {
        return view('livewire.user.user-edit');
    }
}
