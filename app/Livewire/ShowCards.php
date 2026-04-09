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

    public function mount($cat,$option)
    {
        $cat = intval($cat);
        $this->categorie = Categorie::where('id', $cat)->firstOrFail();

        $this->articles = Article::where('categorie_id', $cat)->get();
        if (count($this->articles) == 0) {
            $this->articles = Categorie::where('parent_id', $cat)->get();
        }

        if (($option === null) || (trim($option) === '')){
            $this->withimg = false;
            foreach($this->articles as $article) {
                if (($article->image !== null) && (trim($article->image) != '')) {
                    $this->withimg = true;
                }
            }            
        } else {
            $this->withimg = ($option === 'image');            
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
