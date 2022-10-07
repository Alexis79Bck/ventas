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

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function edit($id)
    {
        $record = Category::find($id);
        $this->selectedId = $record->id;
        $this->name = $record->name;
        $this->image = null;

        $this->emit('show-modal', 'Editar');

    }
    public function render()
    {
        if (strlen($this->search) > 0) {
            $categories = Category::search($this->search)->paginate($this->pagination);
        }else{
            $categories = Category::orderBy('id','desc')->paginate($this->pagination);
        }

        return view('livewire.cork-theme.category.categories', compact('categories'))
        ->extends('layouts.cork-theme.app')
        ->section('content');
    }
}
