<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class remoneracao extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'salario',
        'valorPorExtenso',
    ];


    public function hasCategoria(){
        return $this->belongTo(categoria::class, 'id', 'categoria_id');
    }

}
