<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    
    protected $fillable = [
        'title',
        'categorie_id',
        'summary',
        'image',
        'content',
    ];

    public function categorie() : BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    protected static function booted(): void {
        static::retrieved(function (Article $article) {
            $article->check_balises();
        });

    }


    private function check_balises() : void {

        $this->content = str_replace("<ul>",'<ul class="list-disc px-4">',$this->content);
        $this->content = str_replace("<h1>",'<h1 class="py-4 font-bold text-xl">',$this->content);
        $this->content = str_replace("<h2>",'<h2 class="py-4 font-bold text-lg">',$this->content);

    }


}
