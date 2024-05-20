<?php

namespace App\Livewire;

use Livewire\Component;

class History extends Component
{
    public $page = 'history.concept';

    public function render()
    {
        // dd($this->page);
        return view('livewire.history');
    }

    public function showPage($page)
    {
        $this->page = 'history.' . $page;
    }
}
