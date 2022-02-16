<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nomeCategoria'];


    public function valorSalario(){
        return $this->belongsTo(remoneracao::class, 'id', 'categoria_id');
    }
}
