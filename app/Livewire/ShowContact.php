<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;


class ShowContact extends Component
{
    
    public $items;

    public function mount()
    {
        $this->items = Contact::get();
    }

    public function render()
    {
        return view('livewire.show-contact');
    }
}
