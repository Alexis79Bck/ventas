<?php

namespace App\Http\Livewire\Navbar;

use Livewire\Component;

class Logo extends Component
{
    public $imgUrl;
    public $imgWidth;
    public $imgHeight;
    public $imgAlt;
    public $useLogo = false;

    public function mount($url, $width, $height, $alt){
        $this->imgAlt = $alt;
        $this->imgHeight = $height;
        $this->imgUrl = $url;
        $this->imgWidth = $width;
    }
    public function render()
    {
        return view('livewire.navbar.logo');
    }
}
