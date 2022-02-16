<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\remoneracao;

class ModalDeleteRemoneracao extends Component
{
    protected $listeners = ['eventoConfirmDeleteRemoneracao'];
    
    public $remoneracao_id;

    public function render()
    {
        return view('livewire.admin.modal-delete-remoneracao');
    }

    public function eventoConfirmDeleteRemoneracao($idRemoneracao){
        $this->remoneracao_id = $idRemoneracao;
    }

    public function deleteRemoneracao(){
        $delete = remoneracao::find($this->remoneracao_id);
        $delete->delete();

        $this->emitTo('admin.lista-remoneracao', '$refresh');
    }

}
