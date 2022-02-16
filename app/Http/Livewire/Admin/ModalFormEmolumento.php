<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\emolumento;

class ModalFormEmolumento extends Component
{
    protected $listeners = ['eventoActionEmolumento'];

    public $action;
    public $evento;
    public $dados=[];
    public $emolu=[];

    public function render()
    {
        return view('livewire.admin.modal-form-emolumento');
    }


    public function eventoActionEmolumento($action, $idEmolumento=''){
        $this->reset();
        $this->evento = $action;
        if($idEmolumento){
            $this->edit($idEmolumento);
        } 
    }


    public function edit($idEmolumento){
        
        $infoEmol = emolumento::find($idEmolumento);

        $this->dados=$infoEmol->toArray();
        $this->emolu=$infoEmol;

    }

    public function submitEmolumento(){
        $dadosValidados = Validator::make($this->dados,[
            'emolumentos'=>'bail|required|unique:emolumentos',
            'status'=>'bail|required',
            'valorPago'=>'nullable',
        ],
        $messages = [
            'emolumentos.required' => 'O campo do Emolumento precisa ser preenchido..!',
            'status.required' => 'O campo da forma de tratamento precisa ser preenchido..!',
            'valorPago.required' => 'O campo valor por cobrar precisa ser preenchido..!',
        ])->validate();

        emolumento::create($dadosValidados);
        $this->reset();
        $this->emitTo('admin.sec-geral', '$refresh');
        $this->dispatchBrowserEvent('closeModalEmolumento');
    }


    public function submitAlterar(){
        $dadosValidados = Validator::make($this->dados,[
            'emolumentos'=>'bail|required|unique:emolumentos,emolumentos,'.$this->emolu->id,
            'status'=>'bail|required',
            'valorPago'=>'nullable',
        ],
        $messages = [
            'emolumentos.required' => 'O campo do Emolumento precisa ser preenchido..!',
            'status.required' => 'O campo da forma de tratamento precisa ser preenchido..!',
        ])->validate();

        $this->emolu->update($dadosValidados);
        $this->reset();
        $this->emitTo('admin.sec-geral', '$refresh');
        $this->dispatchBrowserEvent('closeModalEmolumento');
    }

}
