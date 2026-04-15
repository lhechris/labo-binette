<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use App\Models\Article;

class ShowCategorie extends Component
{
    
    public $categorie;
    public $items;
    public $menus;
    public $withimg;

    private $isroot;

    public function mount($id,$item_id)
    {
        $id = intval($id);
        $item_id = intval($item_id);
    
        $this->isroot = ($item_id == 0);

        $this->categorie = Categorie::with(['children','articles'])->findOrFail($id);

        $this->items = $this->buildItems($item_id);
        $this->menus = $this->buildMenus();

        $this->withimg = $this->items->contains(function ($value,$key) {
            return ($value->image !== null && trim($value->image) !== '');
        });
    }

    protected function buildItems(int $id = 0)
    {
        return collect()
            ->merge(
                $this->categorie->children
                    ->when($id !== 0, fn ($q) => $q->where('id', $id))
            )
            ->merge(
                $this->categorie->articles
                    ->when($id !== 0, fn ($q) => $q->where('id', $id))
            );
    }

    protected function buildMenus()
    {
        return collect()
            ->merge($this->categorie->children)
            ->merge($this->categorie->articles);
    }


    public function render()
    {
        if ($this->isroot) {
            return view('livewire.show-categorie');
        } else {
            return view('livewire.show-article');
        }

    }
}
