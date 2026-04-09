<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Categorie extends Model
{
        protected $fillable = [
        'title',
        'content',
        'parent_id'
    ];


    public function parent() : BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'parent_id');
    }


}
