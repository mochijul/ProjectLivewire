<?php

namespace App\Http\Livewire\User;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $roleid;
    public $roles;
    public $password;
    public $password_confirmation;

    public function mount(){
        $this->roles = Role::all();
    }

    public function store(){
        $validate = $this->validate([
            'name'=>'required|min:5',
            'email'=>'required|email|unique:users,email',
            'roleid'=>'required',
            'password'=>'required|confirmed',
        ]);
        session()->flash('message',$validate);

        User::create([
            'name'=>$validate['name'],
            'email'=>$validate['email'],
            'roleid'=>$validate['roleid'],
            'password'=>Hash::make($validate['password']),
        ]);
        $this->emit('userAdded');
        session()->flash('message','Registration success !');
    }

    public function render()
    {
        return view('livewire.user.user-create');
    }
}
