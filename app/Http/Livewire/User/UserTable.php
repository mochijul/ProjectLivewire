<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{


    public $users;
    public $confirming;
    protected $listeners = [
        'userAdded' => 'render',
        'userDeleted' => 'render',
    ];
    public function render()
    {
        $this->users = User::orderby('id','desc')->get();
        return view('livewire.user.user-table');
    }

    public function destroyAbort(){
        $this->confirming = null;
    }

    public function destroyConfirm($userId){
        $this->confirming = $userId;
    }

    public function destroy($userId){
        $user = User::find($userId);
        if ($user){
            $user->delete();
        }

        session()->flash('message','User deleted !');
        $this->emit('userDeleted');
    }
}

