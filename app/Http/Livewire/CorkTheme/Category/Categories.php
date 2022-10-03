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


    public function mount()
    {
        $this->componentName = 'Categorías';
        $this->pageTitle = 'Listado';
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.cork-theme.category.categories', compact('categories'))
        ->extends('layouts.cork-theme.app')
        ->section('content');
    }
}
