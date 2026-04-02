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
        $this->article = Article::where('name', $nom)->firstOrFail();
        //$this->categorie = Categorie::where('name',$cat)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.show-article');
    }
}
