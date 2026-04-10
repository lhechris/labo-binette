<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use App\Models\Article;

class ShowCategorie extends Component
{
    
    public $categorie;
    public $subcategories;
    public $subcategorie;
    public $articles;
    public $article;
    private $rootelement;

    public function mount($nom,$article)
    {
        $nom = intval($nom);
        $article = intval($article);
    
        $this->categorie = Categorie::where('id', $nom)->firstOrFail();


        $this->subcategories = Categorie::where('parent_id',$nom)->get();
        $this->articles = Article::where('categorie_id',$nom)->get();
        
        if ($article === 0) {
            $this->rootelement = true;

            //s'il n'y a qu'un seul article ou une seule categorie 
            //on l'affiche
            if (count($this->articles) == 1) {
                $this->rootelement = false;
                $this->article = $this->articles[0];
            }
            if (count($this->subcategories) == 1) {
                $this->rootelement = false;
                $this->subcategories = $this->articles[0];
            }

        } else {
            $this->rootelement = false;

            foreach($this->articles as $item) {
                if ($item->id == $article) {
                    $this->article = $item;
                    break;
                }
            }
            foreach($this->subcategories as $item) {
                if ($item->id == $article) {
                    $this->subcategorie = $item;
                    break;
                }
            }
        }
    }

    public function render()
    {
        if ($this->rootelement) {
            return view('livewire.show-categorie');

        } else if (count($this->articles)>0) {
            return view('livewire.show-article');

        } else {
            return view('livewire.show-subcategorie');
        }
    }
}
