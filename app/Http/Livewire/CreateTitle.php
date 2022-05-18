<?php

namespace App\Http\Livewire;

use App\Models\TempTitle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTitle extends Component
{

    use WithFileUploads;

    public $showModal = false;
    public $title = '';
    public $description = '';
    public $link = '';
    public $featured_image = null;

    protected $rules = [
        'title' => 'required|min:6|unique:temp_titles,title',
        'link' => 'required|url',
        'description' => 'required|min:6',
        'featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:3048'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }   

    public function save()
    {
        $this->validate();

        try {

            $img = $this->featured_image->store('images');

            TempTitle::create([
                'title' => $this->title,
                'short_description' => Str::limit($this->description, 20),
                'description' => $this->description,
                'link' => $this->link,
                'featured_image_link' => $img,
                'user_id' => Auth::user()->id
            ]);

            $this->dispatchBrowserEvent('refreshParent');

            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => 'New title has been saved successfully!'
            ]);

            $this->showModal = false;
        } catch (\Exception $ex) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'error',
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function render()
    {
        return view('livewire.create-title');
    }
}
