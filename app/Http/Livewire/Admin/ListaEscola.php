<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\escola;
use DB;
use Livewire\WithPagination;


class ListaEscola extends Component
{
    use WithPagination;

    protected $listeners = ['$refresh'];
    protected $paginationTheme = 'bootstrap';
    public $procurarEscola;

    //variaveis para apresentar no painel de detalhes da escola
    
    
    
    public function render()
    {
        $procurar = "%".$this->procurarEscola."%";
        //$escolas=DB::table('escolas')->paginate(5);
        return view('livewire.admin.lista-escola', [
            'inforEscola' => DB::table('escolas')
            ->where('nomeEscola', 'LIKE', $procurar)
            ->orWhere('numEscola', 'LIKE', $procurar)
            ->orderBy('nomeEscola', 'asc')->paginate(5),
        ]);
    }


   
   
}
