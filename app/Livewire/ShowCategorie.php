<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use App\Models\Article;

class ShowCategorie extends Component
{
    
    public $categorie;
    public $articles;
    public $article;

    public function mount($nom,$article)
    {
        $this->categorie = Categorie::where('name', $nom)->firstOrFail();
        $this->articles = Article::where('categorie',$nom)->get();
        if ($article === "root") {
            $this->article = $this->articles[0];
        } else {
            foreach($this->articles as $item) {
                if ($item->name == $article) {
                    $this->article = $item;
                    break;
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.show-categorie');
    }
}
