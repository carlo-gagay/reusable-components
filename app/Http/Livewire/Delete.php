<?php

namespace App\Http\Livewire;

use App\Models\TempTitle;
use Livewire\Component;

class Delete extends Component
{
    public $message = "";
    public $model_id;
    public $show = false;
    public $class_name = "";

    public function delete()
    {
        if (class_exists('\App\Models\\' . $this->class_name)) {
            $model = "\App\Models\\" . $this->class_name;
            $model = new $model;

            $model::where('id', $this->model_id)->delete();

            $this->emit('refreshparent');
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => 'Item successfully deleted!'
            ]);
        } else {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'error',
                'message' => 'Cannot find specific model!'
            ]);
        }

        $this->show = false;
    }

    public function render()
    {
        return view('livewire.delete');
    }
}
