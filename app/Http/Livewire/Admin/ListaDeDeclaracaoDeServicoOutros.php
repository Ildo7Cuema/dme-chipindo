<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\funcionario;
use App\Models\admin\emolumento;
use App\Models\admin\escola;
use DB;

class ListaDeDeclaracaoDeServicoOutros extends Component
{
    
    public $funcID;
    public $nome;
    public $genero;
    public $emolumento;

    public function mount($idFunc=""){
        $this->funcID = $idFunc;
        $infoFuncionario = funcionario::find($this->funcID);
        $this->emolumento = DB::table('emolumentos')->orderBy('emolumentos', 'asc')->get();
        $this->escolas = DB::table('escolas')->orderBy('nomeEscola', 'asc')->get();
        $this->funcionarios = DB::table('funcionarios')->orderBy('nome', 'asc')->get();

        $this->nome = $infoFuncionario->nome;
        $this->genero = $infoFuncionario->genero;
    }
 
    public function render()
    {
        return view('livewire.admin.lista-de-declaracao-de-servico-outros');
    }

    


    
}
