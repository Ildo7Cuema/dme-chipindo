<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\emolumento;

class ModalEmolumentoConfirmDelete extends Component
{
    protected $listeners = ['eventoConfirmEmolumentoDelete'];
    public $idEmolum;

    public function render()
    {
        return view('livewire.admin.modal-emolumento-confirm-delete');
    }


    public function eventoConfirmEmolumentoDelete($idEmolumento){
        $this->idEmolum = $idEmolumento;
    }

    public function submitEmolumento(){
        $apagar=emolumento::find($this->idEmolum);
        $apagar->delete();
        $this->emitTo('admin.sec-geral', '$refresh');
        $this->dispatchBrowserEvent('closeModalConfirmEmolumento');
    }

}
