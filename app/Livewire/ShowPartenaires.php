<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Partenaire;


class ShowPartenaires extends Component
{
    
    public $avectexte;
    public $sanstexte;
    public $asso;

    public function mount()
    {
        $this->avectexte = Partenaire::orderBy('order')
                                       ->get();
        $this->sanstexte = Partenaire::where('content is null')
                                       ->orderBy('order')
                                       ->get();
        $this->asso = Partenaire::where("type='asso'")
                                       ->orderBy('order')
                                       ->get();
    }

    public function render()
    {
        return view('livewire.show-partenaires');
    }
}
