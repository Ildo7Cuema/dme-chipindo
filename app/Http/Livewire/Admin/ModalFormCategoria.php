<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\categoria;
use Illuminate\Support\Facades\Validator;

class ModalFormCategoria extends Component
{
    protected $listeners = ['eventoActionCategoria', '$refresh'];
    public $action;
    public $categoriaID;

    public $dados = [];
    public $categ = [];

    public function render()
    {
        return view('livewire.admin.modal-form-categoria');
    }

    public function eventoActionCategoria($action, $categoria_id=''){
        $this->reset();
        $this->action = $action;
        if($categoria_id){
            $this->edit($categoria_id);
        }
    }

    public function submit(){

            $validarCampoCategoria = Validator::make($this->dados,
            [
            'nomeCategoria'=>'bail|required|unique:categorias',
            ],
            $messages = [
               'nomeCategoria.required' => 'O campo categoria precisa ser preenchido...!', 
            ])->validate();
            
            categoria::create($validarCampoCategoria);
            $this->reset();
            $this->emitTo('admin.lista-categoria', '$refresh');
            $this->dispatchBrowserEvent('closeModal');

    }


    public function submitAlterar(){

            $validarCampoCategoria = Validator::make($this->dados,
            [
            'nomeCategoria'=>'bail|required|unique:categorias,nomeCategoria,'.$this->categ->id,
            ],
            $messages = [
               'nomeCategoria.required' => 'O campo categoria precisa ser preenchido...!', 
            ])->validate();
            
            $this->categ->update($validarCampoCategoria);
            $this->reset();
            $this->emitTo('admin.lista-categoria', '$refresh');
            $this->dispatchBrowserEvent('closeModal');

    }

    private function edit($categoriaID){

        $infoCategoria = categoria::find($categoriaID);

        $this->dados=$infoCategoria->toArray();

        $this->categ = $infoCategoria;
    }
}
