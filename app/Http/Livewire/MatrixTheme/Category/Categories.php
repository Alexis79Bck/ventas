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
    protected $listeners = ['deleteRow' => 'destroy'];


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
        $this->name = "";
        $this->image = null;
        $this->search = "";
        $this->selectedId = 0;
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


        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/categories', $customFileName);
            $category->image = $customFileName;
            $category->save();
        }

        $this->resetUI();
       
        $this->emit('hide-modal',[$this->componentName,'Categoría Registrada']);


    }


    public function edit($id)
    {

        $record = Category::find($id, ['id','name','image']);
        $this->selectedId = $record->id;
        $this->name = $record->name;
        $this->image = $record->image;

        $this->emit('show-modal', $this->componentName);
    }
    public function update()
    {
        $rules =[
            'name'=>"required|unique:categories,name,{$this->selectedId}|min:3"
        ];

        $messages = [
            'name.required' => 'El campo nombre es requerido.',
            'name.unique' => 'Este nombre ya existe.',
            'name.min' => 'El nombre debe ser de al menos 3 caracteres.',
        ];

        $this->validate($rules, $messages);

        $category = Category::find($this->selectedId);
        $category->update([
            'name'=>$this->name
        ]);

        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/categories', $customFileName);
            $oldImageName = $category->image;

            $category->image = $customFileName;

            $category->save();

            if ($oldImageName != null){
                if (file_exists('storage/categories/' . $oldImageName))
                {
                    unlink('storage/categories/' . $oldImageName);
                }
            }

        }

        $this->resetUI();
        $this->emit('hide-modal',[$this->componentName,'Categoría Actualizada']);


    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $oldImageName = $category->image;
        $category->delete();
        if ($oldImageName != null){

            unlink('storage/categories/' . $oldImageName);

        }
        $this->resetUI();
        
        $this->emit('category-deleted','Categoría Eliminada');
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
