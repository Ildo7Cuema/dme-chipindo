<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\remoneracao;
use DB;
use Livewire\WithPagination;

class ListaRemoneracao extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh'];
    
    public $remoneracao;
    public $procurarSalario;

    public function render()
    {
        $procurar = "%".$this->procurarSalario."%";

        return view('livewire.admin.lista-remoneracao', [
            'infoRemoneracao' => DB::table('remoneracaos')
            ->where('salario', 'LIKE', $procurar)->orderBy('salario', 'asc')->paginate(5),
        ]);
    }
}
