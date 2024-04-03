<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    static function obtener_logos(){
        return Logo::select('id', 'logo_url')
            ->orderby('id', 'asc')    
            ->get();
    }
}
