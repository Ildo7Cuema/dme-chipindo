<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\funcionario;

class ModalDeleteConfirmeFuncionario extends Component
{
    protected $listeners = ['eventoActionFuncionarioDeleteConfirmsFunc'];
    
    public $func_id;
    public $data;
    public $nome;

    public function render()
    {
        return view('livewire.admin.modal-delete-confirme-funcionario');
    }


    public function eventoActionFuncionarioDeleteConfirmsFunc($idFunc){
        $this->func_id = $idFunc;
        $this->data = funcionario::find($idFunc);
        $this->nome = $this->data->nome;
    }

    public function deleteFunc(){

        $delete = funcionario::find($this->func_id);
        $delete->delete();

        $this->emitTo('admin.lista-funcionário', '$refresh');
        $this->dispatchBrowserEvent('closeModalConfirmFuncionario');
    }
}
