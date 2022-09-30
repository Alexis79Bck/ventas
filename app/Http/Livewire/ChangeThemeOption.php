<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChangeThemeOption extends Component
{
    public $textColor;
    public $themeName;

    public function changeTheme(){
        if (config('app.theme') == 'cork_theme') {
            config(['app.theme'=> 'matrix_theme']);
        }else{
            config(['app.theme'=> 'cork_theme']);
        }

        return redirect()->route('home');

    }
    public function render()
    {
        return view('livewire.change-theme-option');
    }
}
