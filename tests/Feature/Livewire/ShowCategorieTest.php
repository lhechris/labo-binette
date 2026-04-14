<?php
namespace Tests\Feature\Livewire;

use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Categorie;
use App\Models\Article;

class ShowCategorieTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_it_loads_category_children_and_articles()
    {
        // Parent
        $parent = Categorie::create([
            'title' => 'Parent',
            'parent_id' => null,
        ]);

        // Enfants
        $child1 = Categorie::create([
            'title' => 'Child 1',
            'parent_id' => $parent->id,
        ]);

        $child2 = Categorie::create([
            'title' => 'Child 2',
            'parent_id' => $parent->id,
        ]);

        // Articles
        Article::create([
            'title' => 'Article 1',
            'content' => '...',
            'categorie_id' => $parent->id,
        ]);

        Article::create([
            'title' => 'Article 2',
            'content' => '...',
            'categorie_id' => $parent->id,
        ]);

        // Livewire
        Livewire::test(\App\Livewire\ShowCategorie::class, [
            'id' => $parent->id,
            'item_id' => null,
        ])
            ->assertSet('categorie.id', $parent->id)
            ->assertCount('items', 4); // 2 catégories + 2 articles
    }
}