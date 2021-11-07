<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    use HasFactory;
    protected $table = 'categoria_productos';
    protected $fillable = [
        'nombre', 'imagen'
    ];

    public function category(){
        return $this->hasmany('App\Models\Producto', 'idCategoria', 'id');
    }
}
