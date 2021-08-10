<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Settings extends Component
{

    public  $password;
    public $openPasswordModal;


    public function showPasswordModal(){
        $this->openPasswordModal = true;
    }

    public function closePasswordModal(){
        $this->openPasswordModal = false;
    }

    public function updatePassword($id){

        $profile = User::find($id);
        $profile->password = Hash::make($this->password);
        $profile->save();
    }
    public function render()
    {
        return view('livewire.settings');
    }
}
