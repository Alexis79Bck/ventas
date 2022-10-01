<?php

namespace App\Http\Livewire\Navbar;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserSection extends Component
{
    public $userFullName;
    public $userImgPath;

    public function mount(){
        $this->userFullName = Auth::user()->fullname;
        $this->userImgPath = Auth::user()->image;
    }
    public function render()
    {
        return view('livewire.navbar.user-section');
    }
}
