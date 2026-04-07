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
        $this->categorie = Categorie::where('name', $cat)->firstOrFail();

        $this->articles = Article::where('categorie', $cat)->get();
        if (count($this->articles) == 0) {
            $this->articles = Categorie::where('parent', $cat)->get();
        }

        $this->withimg = $withimg;
        if ($this->withimg === null) {
            $this->withimg = false;
            foreach($this->articles as $article) {
                if (($article->image === null) || ($article->image == '')) {
                    $this->withimg = true;
                }
            }            
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
