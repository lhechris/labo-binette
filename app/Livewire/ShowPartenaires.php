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
        $partenaires = Partenaire::orderBy("order")->get();

        $this->avectexte = array();
        $this->sanstexte = array();
        $this->asso = array();

        foreach($partenaires as $partenaire) {
            if ($partenaire->type == 'asso') {
                array_push($this->asso,$partenaire);
            
            } else if (($partenaire->content === null) || (trim($partenaire->content)) === '' ) {
                array_push($this->sanstexte,$partenaire);

            } else {
                array_push($this->avectexte,$partenaire);
            }
        }
    }

    public function render()
    {
        return view('livewire.show-partenaires');
    }
}
