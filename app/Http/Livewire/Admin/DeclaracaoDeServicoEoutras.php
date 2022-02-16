<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use DB;
use App\Models\admin\funcionario;
use Livewire\WithPagination;

class DeclaracaoDeServicoEoutras extends Component
{
    public $procurarFuncionario;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';



    public function render()
    {
        $procurar="%".$this->procurarFuncionario."%";
        return view('livewire.admin.declaracao-de-servico-eoutras', [
            'funcionario' => DB::table('funcionarios')
            ->where('nome', 'LIKE', $procurar)
            ->orWhere('numBi', 'LIKE', $procurar)
            ->orWhere('numAgente', 'LIKE', $procurar)
            ->orderBy('nome', 'asc')
            ->paginate(5),
        ]);
    }
}
