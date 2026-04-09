<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use App\Models\Article;

class ShowCategorie extends Component
{
    
    public $categorie;
    public $subcategories;
    public $articles;
    public $article;

    public function mount($nom,$article)
    {
        $nom = intval($nom);
        $article = intval($article);
    
        $this->categorie = Categorie::where('id', $nom)->firstOrFail();


        $this->subcategories = Categorie::where('parent_id',$nom)->get();
        $this->articles = Article::where('categorie_id',$nom)->get();
        
        if ($article === 0) {
            //On veut le premier élément de la liste
            if (count($this->articles)>0) {
                // c'est une categorie d'article
                $this->article = $this->articles[0];
            } 
        } else {
            foreach($this->articles as $item) {
                if ($item->id == $article) {
                    $this->article = $item;
                    break;
                }
            }
        }
    }

    public function render()
    {
        if (count($this->articles)>0) {
            return view('livewire.show-categorie');
        } else {
            return view('livewire.show-subcategorie');
        }
    }
}
