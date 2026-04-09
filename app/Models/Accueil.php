<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

#[Table('accueil')]
class Accueil extends Model
{
        protected $fillable = [
        'accueilable_type',
        'order',
        'accueilable_id',
        'option'    
    ];

    public function accueilable() : MorphTo
    {
        return $this->morphTo();
    }


}
