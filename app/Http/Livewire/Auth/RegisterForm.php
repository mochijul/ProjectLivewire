<?php

namespace App\Http\Livewire\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterForm extends Component
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

        session()->flash('message','Registration success !');
        return redirect()->route('login');



    }

    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
