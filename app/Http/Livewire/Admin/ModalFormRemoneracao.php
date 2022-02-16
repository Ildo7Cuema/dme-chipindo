<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\categoria;
use App\Models\admin\remoneracao;

class ModalFormRemoneracao extends Component
{
    protected $listeners=['eventoActionRemoneracao'];

    public $action;
    public $remoneracao_id;
    public $categoria_id;
    public $salario;
    public $categoriaId;

    public $dados = [];
    public $remon = [];

    public function render()
    {
        return view('livewire.admin.modal-form-remoneracao', [
            'infoCategoria' => categoria::all(),
        ]);
    }

    public function eventoActionRemoneracao($action, $remon_id=''){
        $this->reset();
        $this->action = $action;
        if ($remon_id) {
            // code...
            $this->edit($remon_id);
        }
    }

    public function submit(){
        $dadosValidados = Validator::make($this->dados,[
            'categoria_id' => 'bail|required|unique:remoneracaos',
            'salario' => 'bail|required|unique:remoneracaos',
            'valorPorExtenso'=>'bail|required',
        ],
            $messages = [
            'categoria_id.required' => 'O preenchimento do campo categoria é obrigatório',
            'salario.required' => 'O preenchimento do campo salário é obrigatório',
            'valorPorExtenso'=>'Deves escrever o valor por extenso do salário líquido',
        ])->validate();

        remoneracao::create($dadosValidados);
        $this->reset();
        $this->emitTo('admin.lista-remoneracao', '$refresh');
        $this->dispatchBrowserEvent('closeModalRemoneracao');
    }


    public function submitAlterar(){
        $dadosValidados = Validator::make($this->dados,[
            'categoria_id' => 'bail|required|unique:remoneracaos,categoria_id,'.$this->remon->id,
            'salario' => 'bail|required|unique:remoneracaos,salario,'.$this->remon->id,
            'valorPorExtenso'=>'bail|required'
        ],
            $messages = [
            'categoria_id.required' => 'O preenchimento do campo categoria é obrigatório',
            'salario.required' => 'O preenchimento do campo salário é obrigatório',
            'valorPorExtenso'=>'Deves escrever o valor por extenso do salário líquido',
        ])->validate();

        $this->remon->update($dadosValidados);
        $this->reset();
        $this->emitTo('admin.lista-remoneracao', '$refresh');
        $this->dispatchBrowserEvent('closeModalRemoneracao');
    }

    private function edit($remon_id){
        $infoRemoneracao = remoneracao::find($remon_id);
        $this->dados = $infoRemoneracao->toArray();
        $this->remon = $infoRemoneracao;
    }



}
