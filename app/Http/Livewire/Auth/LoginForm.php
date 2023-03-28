<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{
    public $email;
    public $password;

    public function authlogin(){
        $credentials = $this->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(Auth::attempt($credentials)){
            session()->regenerate();
        }
        session()->flash('message',$credentials);
    }

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
