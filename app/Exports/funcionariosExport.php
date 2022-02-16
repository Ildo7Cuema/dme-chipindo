<?php

namespace App\Exports;

use App\Models\admin\funcionario;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadings;

class funcionariosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('funcionarios')->select('nome', 'numBi', 'dataNascimento', 'genero', 'funcao', 'grauAcademico', 'areaFormacao', 'numAgente')->orderBy('nome', 'asc')->get();
    }


    public function headings(): array {

        return [

            'Nome completo',
            'Nº Bilhete',
            'Data de nascimento',
            'Gênero',
            'Função',
            'Grau Acadêmico',
            'Área de formação',
            'Nº de agente',

        ];
    }



}
