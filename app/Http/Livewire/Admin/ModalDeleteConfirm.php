<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\escola;

class ModalDeleteConfirm extends Component
{
    public $escolaID;
    protected $listeners = ['eventoConfirm'];

    public function render()
    {
        return view('livewire.admin.modal-delete-confirm');
    }


    public function eventoConfirm($escolaID){
        $this->escolaID = $escolaID;
    }

    public function delete(){

        escola::find($this->escolaID)->delete();

        $this->emitTo('admin.lista-escola', '$refresh');
        $this->dispatchBrowserEvent('closeModaConfirm');
    }
}
