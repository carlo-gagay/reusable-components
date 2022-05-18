<?php

namespace App\Http\Livewire;

use App\Models\TempTitle;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class TitleModal extends Component
{

    use WithFileUploads;

    public $show = false;
    protected $listener = [
        'showTitleModal' => 'showModal',
        'closemodal' => 'close'
    ];

    public $title = '';
    public $description = '';
    public $short_description = '';
    public $featured_image = null;

    protected $rules = [
        'title' => 'required|min:6|unique:temp_titles,title',
        'short_description' => 'required|min:6',
        'description' => 'required|min:6',
        'featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:3048'
    ];

    public function close()
    {   
        $this->show = false;
    }

    public function updated($propertyName)
    {
        try{
            $this->validateOnly($propertyName);
        } catch (\Exception $ex) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => 'The file you entered may be not supported!'
            ]);
        }
    }   

    public function save()
    {
        $this->validate();

        try {

            $img = $this->featured_image->store('images');

            TempTitle::create([
                'title' => $this->title,
                'short_description' => $this->short_description,
                'description' => $this->description,
                'featured_image_link' => $img,
                'user_id' => Auth::user()->id
            ]);
            
            $this->emit('closemodal');
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => 'New title has been saved successfully!'
            ]);
        } catch (\Exception $ex) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'error',
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function render()
    {
        return view('livewire.title-modal');
    }
}
