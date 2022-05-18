<?php

namespace App\Http\Livewire;

use App\Models\TempTitle;
use Livewire\Component;
use Livewire\WithPagination;

class Titles extends Component
{

    use WithPagination;

    protected $listener = [
        'refreshParent' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.titles', [
            'titles' => TempTitle::paginate(7)
        ]);
    }
}
