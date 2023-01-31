<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    public function categorias(){
        return $this->belongsToMany(Categoria::class);
    }

    public function ingredientes(){
        return $this->belongsToMany(Ingrediente::class);
    }

    public function usuarios(){
        return $this->belongsTo(Usuario::class);
    }
}
