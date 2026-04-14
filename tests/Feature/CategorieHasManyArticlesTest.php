<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Categorie;
use App\Models\Article;

class CategorieHasManyArticlesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_a_categorie_retrieves_its_articles_from_database()
    {
        // La BDD est vide au départ
        $this->assertDatabaseCount('categories', 0);
        $this->assertDatabaseCount('articles', 0);

        // Arrange : insertion réelle en base
        $categorie = Categorie::create([
            'title' => 'Tech',
            'parent_id' => null,
        ]);

        Article::create([
            'title' => 'Article 1',
            'content' => 'Contenu 1',
            'categorie_id' => $categorie->id,
        ]);

        Article::create([
            'title' => 'Article 2',
            'content' => 'Contenu 2',
            'categorie_id' => $categorie->id,
        ]);

        // Vérification BDD
        $this->assertDatabaseHas('categories', [
            'id' => $categorie->id,
            'title' => 'Tech',
        ]);

        $this->assertDatabaseCount('articles', 2);

        // Act : récupération depuis la BDD
        $categorieFromDb = Categorie::find($categorie->id);
        $articles = $categorieFromDb->articles;

        // Assert : relation hasMany réelle
        $this->assertCount(2, $articles);

        $articles->each(function ($article) use ($categorie) {
            $this->assertEquals($categorie->id, $article->categorie_id);
        });
    }

    public function test_a_categorie_retrieves_its_children_from_database()
    {
        // La BDD est vide au départ
        $this->assertDatabaseCount('categories', 0);

        // Arrange : insertion réelle en base
        $categorie = Categorie::create([
            'title' => 'Tech',
            'parent_id' => null,
        ]);


        Categorie::create([
            'title' => 'Sub cat 1',
            'parent_id' => $categorie->id,
        ]);

        Categorie::create([
            'title' => 'Sub cat 2',
            'parent_id' => $categorie->id,
        ]);


        // Vérification BDD
        $this->assertDatabaseHas('categories', [
            'id' => $categorie->id,
            'title' => 'Tech',
        ]);

        $this->assertDatabaseCount('categories', 3);

        // Act : récupération depuis la BDD
        $categorieFromDb = Categorie::find($categorie->id);
        $subcats = $categorieFromDb->children;

        $this->assertCount(2, $subcats);

        $subcats->each(function ($subcat) use ($categorie) {
            $this->assertEquals($categorie->id, $subcat->parent_id);
        });
    }



}