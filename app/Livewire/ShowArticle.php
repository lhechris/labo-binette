<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Categorie;

class ShowArticle extends Component
{
    
    public $article;
    //public $categorie;

    public function mount($cat,$nom)
    {
        $nom = intval($nom);
        $cat = intval($cat);

        $this->article = Article::where('id', $nom)->firstOrFail();
        //$this->categorie = Categorie::where('id',$cat)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.show-article');
    }
}
