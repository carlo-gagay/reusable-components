<?php

namespace App\Http\Livewire;

use App\Models\TempTitle;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{

    use WithPagination;

    protected $listener = [
        'notify' => '$refresh'
    ];

    public function render()
    {
        $data = TempTitle::paginate(4);
        return view('livewire.dashboard', [
            'titles' => $data
        ]);
    }
}
