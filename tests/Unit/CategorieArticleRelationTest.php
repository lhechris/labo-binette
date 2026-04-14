<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Categorie;
use App\Models\Article;

class CategorieArticleRelationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_a_categorie_has_many_articles()
    {
        // Arrange : une catégorie
        $categorie = categorie::factory()->create();

        // Et 3 articles liés à cette catégorie
        $articles = Article::factory()
            ->count(3)
            ->create([
                'categorie_id' => $categorie->id,
            ]);

        // Act
        $categorieArticles = $categorie->articles;


        // Assert
        $this->assertCount(3, $categorieArticles);
        $this->assertInstanceOf(Article::class, $categorieArticles->first());

        // Vérifie que tous les articles sont bien liés à la catégorie
        $categorieArticles->each(function ($article) use ($categorie) {
            $this->assertEquals($categorie->id, $article->categorie_id);
        });
    }

}
