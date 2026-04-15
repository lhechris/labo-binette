<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Categorie;

class ShowCards extends Component
{
    
    public $items;
    public $categorie;
    private $withimg;

    public function mount($cat,$option)
    {
        $cat = intval($cat);
        $this->categorie = Categorie::where('id', $cat)->firstOrFail();

        $this->items = collect()
            ->merge($this->categorie->children)
            ->merge($this->categorie->articles);
        
        if (($option === null) || (trim($option) === '')){
            $this->withimg = false;
            foreach($this->items as $item) {
                if (($item->image !== null) && (trim($item->image) != '')) {
                    $this->withimg = true;
                }
            }            
        } else {
            $this->withimg = ($option == 'image');            
        }

    }

    public function render()
    {
        if ($this->withimg) {
            return view('livewire.show-cards-img');
        } else {
            return view('livewire.show-cards');
        }
    }
}
