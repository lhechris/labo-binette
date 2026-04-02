<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use App\Models\Article;

class ShowCategorie extends Component
{
    
    public $categorie;
    public $articles;

    public function mount($nom)
    {
        $this->categorie = Categorie::where('name', $nom)->firstOrFail();
        $this->articles = Article::where('categorie',$nom)->get();
    }

    public function render()
    {
        return view('livewire.show-categorie');
    }
}
