<?php

namespace App\Http\Livewire\MatrixTheme\Category;

use App\Http\Traits\FormFields;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
class Categories extends Component
{
    use WithFileUploads, WithPagination, FormFields;

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
    public function resetUI()
    {

    }

    public function store()
    {
        $rules =[
            'name'=>'required|unique:categories|min:3'
        ];

        $messages = [
            'name.required' => 'El campo nombre es requerido.',
            'name.unique' => 'Este nombre ya existe.',
            'name.min' => 'El nombre debe ser de al menos 3 caracteres.',
        ];

        $this->validate($rules, $messages);

        $category = Category::create([
            'name'=> $this->name
        ]);

        dd($category);
    }

    public function edit($id)
    {

        $record = Category::find($id, ['id','name','image']);
        $this->selectedId = $record->id;
        $this->name = $record->name;
        $this->image = $record->image;

        $this->emit('show-modal', $this->componentName);
    }
    public function render()
    {
        if (strlen($this->search) > 0) {
            $categories = Category::search($this->search)->paginate($this->pagination);
        }else{
            $categories = Category::orderBy('id','desc')->paginate($this->pagination);
        }
        return view('livewire.matrix-theme.category.categories', compact('categories'))
        ->extends('layouts.matrix-theme.app')
        ->section('content');
    }
}
