<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use DB;
use App\Models\admin\funcionario;
use Livewire\WithPagination;

class ListaFuncionário extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh'];

    public $procurarFuncionario;

    public function render()
    {
        $procurar = '%'.$this->procurarFuncionario.'%';

        return view('livewire.admin.lista-funcionário', [
            'infoFuncionarios' => DB::table('funcionarios')
            ->where('nome', 'LIKE', $procurar)
            ->orderBy('nome', 'asc')->paginate(10),
        ]);
    }
}
