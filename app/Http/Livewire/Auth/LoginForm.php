<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{
    public $email;
    public $password;



    public function authlogin()
    {
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // session()->flash('message', $credentials);

        if (Auth::attempt($credentials)) {
            session()->regenerate();
            return redirect()->route('dashboard');
        }else{
            session()->flash('message','Alamat Email atau Password Anda salah !');
            return redirect()->route('register');
        }
    }

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
