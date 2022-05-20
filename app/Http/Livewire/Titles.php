<?php

namespace App\Http\Livewire;

use App\Models\TempTitle;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Titles extends Component
{

    use WithPagination, WithFileUploads;

    public $showUpdateModal = false;
    public TempTitle $editing;

    public $showDeleteModal = false;

    protected $listener = [
        'refreshParent' => '$refresh'
    ];

    protected $rules = [
        'editing.title' => 'required|min:6|unique:temp_titles,title',
        'editing.link' => 'required|url',
        'editing.description' => 'required|min:6',
        'editing.featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:3048',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function edit(TempTitle $title)
    {
        $this->editing = $title;

        $this->showUpdateModal = true;
    }

    public function save()
    {
        $this->validate();

        $this->editing->save();

        $this->showUpdateModal = false;
    }

    public function render()
    {
        return view('livewire.titles', [
            'titles' => TempTitle::paginate(5)
        ]);
    }
}
