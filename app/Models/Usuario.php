<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function objetivos(){
        return $this->hasMany(Objetivo::class);
    }

    public function recetas(){
        return $this->hasMany(Recetas::class);
    }
}
