<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Accueil;
use App\Models\Categorie;

class ShowAccueil extends Component
{
    public $items;

    public function mount()
    {
        $accs = Accueil::orderBy('order')->get();
        $cats = Categorie::get();

        $this->items = array();

        foreach ($accs as $acc) {
            $item = new \StdClass();
            if ($acc->type == "categorie") {
                foreach ($cats as $cat) {
                    if ($cat->name == $acc->ident) {
                        $item->name = $cat->name;
                        if ($acc->option == "image") {
                            $item->withimg=true;
                        } else if ($acc->option == "texte") {
                            $item->withimg=false;
                        }
                        array_push($this->items,$item);
                    }
                }                
            }
        }

    }

    public function render()
    {
       return view('livewire.accueil');
    }
}
