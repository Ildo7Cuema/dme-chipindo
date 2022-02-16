<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\categoria;
class ModalCategoririaConfirm extends Component
{
    protected $listeners = ['eventoConfirmCategoria'];
    public $categoria_id;

    public function render()
    {
        return view('livewire.admin.modal-categoriria-confirm');
    }


    public function eventoConfirmCategoria($categoriaID){
        $this->categoria_id = $categoriaID;
    }

    public function deleteCategoria(){
        $deleteCateg = categoria::find($this->categoria_id);
        $deleteCateg->delete();

        $this->emitTo('admin.lista-categoria', '$refresh');
        $this->dispatchBrowserEvent('closeModalConfirmCategoria');
    }
}
