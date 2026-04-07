<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class Nav extends Component
{
    
    public $categories;

    public function mount()
    {
        $this->categories = Categorie::whereNull('parent')
                                     ->orWhere('parent','')
                                     ->get();
    }

    public function render()
    {
       return view('livewire.nav');
    }
}