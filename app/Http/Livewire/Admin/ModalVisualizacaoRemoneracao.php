<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\remoneracao;
use App\Models\admin\categoria;

class ModalVisualizacaoRemoneracao extends Component
{
    protected $listeners = ['eventoVisualRemoneracao'];
    public $infoCategoria;
    public $salario;
    public $salarioID;


    public function render()
    {
        return view('livewire.admin.modal-visualizacao-remoneracao');
    }


    public function eventoVisualRemoneracao($salario_id){

        $this->salarioID = $salario_id;

        $infoRemoneracao = remoneracao::find($salario_id);

        $categName=categoria::find($infoRemoneracao->categoria_id);

        $this->infoCategoria=$categName->nomeCategoria;
        $this->salario=$infoRemoneracao->salario;
    }


}
