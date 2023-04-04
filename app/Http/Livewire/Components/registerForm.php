<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterForm extends Component
{
    use WithFileUploads;

    public $email;
    public $idNum;
    public $userName;
    public $password;
    public $gender;
    public $accountType = "guest";
    public $file;
    public $wantNews;
    

    public function rules()
{
    return [
        'email' => 'required|email',
        'idNum' => 'required|min:8|',
        'userName' => 'required',
        'password' => 'required|min:8',
        'gender' => 'required',
        'accountType' => 'required',
        'file' => 'required',
    ];
}

    public function render()
    {
        return view('livewire.components.register-form');
    }
    
    public function submit(){

        $this->validate();

        dd($this->email, $this->idNum, $this->userName, $this->password, $this->gender, $this->accountType, $this->file , $this->wantNews);
    }
}
