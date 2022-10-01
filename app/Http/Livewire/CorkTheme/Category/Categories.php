<?php

namespace App\Http\Livewire\CorkTheme\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Categories extends Component
{
    use WithFileUploads, WithPagination;

    public $name;
    public $image;
    public $search;
    public $selectedId;
    public $componentName;
    public $pageTitle;
    private $pagination = 10;
    public function render()
    {
        $data = Category::all();
        return view('livewire.cork_theme.category.categories', compact('data'))
        ->extends('layouts.cork_theme.app')
        ->section('content');
    }
}
