<?php

namespace App\Http\Livewire\MatrixTheme\Category;

use Livewire\Component;
use App\Models\Category;
class Categories extends Component
{
    public function render()
    {
        return view('livewire.matrix_theme.category.categories')
        ->extends('layouts.matrix_theme.app')
        ->section('content');
    }
}
