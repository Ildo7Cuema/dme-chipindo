<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emolumento extends Model
{
    use HasFactory;

    protected $fillable = [
        "emolumentos",
        "valorPago",
        "status",
    ];
}
