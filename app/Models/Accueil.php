<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Table('accueil')]
class Accueil extends Model
{
        protected $fillable = [
        'type',
        'order',
        'ident',
        'option'    
    ];
}
