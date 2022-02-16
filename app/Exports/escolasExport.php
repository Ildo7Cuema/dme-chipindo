<?php

namespace App\Exports;

use App\Models\admin\escola;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;


class escolasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('escolas')->select('nomeEscola', 'numEscola','localizacao')->orderBy('nomeEscola', 'asc')->get();
    }


    public function headings(): array {

        return [
            "Escolas",
            "Nº da Escola",
            "Localização"
        ];
    }
}
