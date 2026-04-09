<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Accueil;
use App\Models\Categorie;

class ShowAccueil extends Component
{
    public $accueils;

    public function mount()
    {
        $this->accueils = Accueil::orderBy('order')->get();
    }

    public function render()
    {
       return view('livewire.accueil');
    }
}
