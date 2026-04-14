<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
        protected $fillable = [
        'title',
        'content',
        'parent_id'
    ];

    public function children() : HasMany
    {
        return $this->hasMany(Categorie::class, 'parent_id');
    }

    public function parent() : BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'parent_id');
    }

    public function articles() : HasMany
    {
        return $this->hasMany(Article::class);
    }


    public function getTypeAttribute()
    {
        return 'categorie';
    }

    public function getUrlAttribute()
    {
        return route('categorie',[$this->id,0]);
    }

}
