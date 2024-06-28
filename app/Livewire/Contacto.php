<?php

namespace App\Livewire;

use Livewire\Component;

class Contacto extends Component
{
    protected $layout = 'components.layouts.app';

    public function render()
    {
        return view('livewire.contacto');
    }
}
