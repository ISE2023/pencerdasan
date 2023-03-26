<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public $name;
    public $email;
    public $password;
    public $dropdown;

    public function render()
    {
        return view('livewire.registration');
    }

    public function submit()
    {
        dd($this->name,$this->email,$this->password,$this->dropdown);
    }
}
