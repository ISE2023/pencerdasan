<?php

namespace App\Http\Livewire\Pages;
use Livewire\Component;
use Livewire\WithFileUploads;

class Registration extends Component
{
    //name, email, password
    public $name;
    public$email;
    public$password;

    public function render()
    {
        return view('livewire.pages.registration');
    }

    //file uploads
    use WithFileUploads;
    public$photo;
    public function submit()
    {
        dd($this->name,$this->email,$this->password,$this->photo,$this->service

        );
        $this->validate([
            'photo' => 'image|max:1024', // besarnya <= 1 MB
        ]);

        $this-> photo -> store('photos');
    }

    //checkbox
    public $service= ['website'];


}
