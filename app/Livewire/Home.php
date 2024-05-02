<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    protected $layout = 'components.layouts.app';

    public function render()
    {
        return view('livewire.home');
    }
}
