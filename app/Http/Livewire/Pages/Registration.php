<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Registration extends Component
{
    public $name;
    public$email;
    public$password;
    public function render()
    {
        return view('livewire.pages.registration');
    }

    public function submit()
    {

    }

}
