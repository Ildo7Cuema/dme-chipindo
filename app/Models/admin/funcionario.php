<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'escola_id',
        'nome',
        'nomeDoPai',
        'nomeDaMae',
        'numBi',
        'dataNascimento',
        'dataEmissao',
        'provincia',
        'municipio',
        'genero',
        'contacto',
        'email',
        'funcao',
        'grauAcademico',
        'areaFormacao',
        'institutoDeFormacao',
        'numAgente',
        'inicioFuncoes',
    ];


    public function pertenceEscola(){
        return $this->hasOne(escola::class, 'id', 'escola_id');
    }

    public function pertenceCategoria(){
        return $this->hasOne(categoria::class, 'id', 'categoria_id');
    }
}
