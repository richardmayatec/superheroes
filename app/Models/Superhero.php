<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;

    static function obtener_heroes(){
        return Superhero::join('universes', 'universes.id', '=', 'superheroes.universe_id')
            ->select('superheroes.id', 'superheroes.hero_name', 'superheroes.real_name', 'superheroes.gender', 'universes.universe_name')
            ->orderby('superheroes.id', 'asc')
            ->get();
    }
}
