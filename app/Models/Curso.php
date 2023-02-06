<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /* protected $fillable =['name', 'description','categoria']; */
    // metodo para guardar todos los campos ignorando los protegidos
    protected $guarded = [];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
