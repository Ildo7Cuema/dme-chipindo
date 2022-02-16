<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class escola extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'nomeEscola',
        'numEscola',
        'num_contribuinte_fiscal',
        'provincia',
        'municipio',
        'localizacao',
        'zip',
        'formaJuridica',
        'tipoConstrucao',
        'directorDaEscola',
        'subDirector',
        'subDirectorPedagogico',
        'secretario',
        'contacto',
        'email',

    ];
}
