<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Categorie;

class ShowCards extends Component
{
    
    public $articles;
    public $categorie;
    private $withimg;

    public function mount($cat,$withimg)
    {
        $this->articles = Article::where('categorie', $cat)->get();
        $this->categorie = Categorie::where('name', $cat)->firstOrFail();
        $this->withimg = $withimg;

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
