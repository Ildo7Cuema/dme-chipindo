<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\funcionario;
use Carbon\Carbon;
use App\Models\admin\categoria;
use App\Models\admin\escola;
use DB;

class ModalFormFuncionarios extends Component
{
    protected $listeners = ['eventoActionFuncionario'];
    public $action;

    public $dados = [];
    public $funcEdit=[];
    public $categoria;
    public $escolaID;
    public $categoriaID;
    public $escola;



    public function render()
    {
        return view('livewire.admin.modal-form-funcionarios', [
            'categorias' => categoria::all(),
            'escolas' => DB::table('escolas')->orderBy('nomeEscola', 'asc')->get(),
        ]);
    }

    public function eventoActionFuncionario($action, $func_id = ''){
        $this->reset();
        $this->action = $action;
        if ($func_id) {
            // code...
            $this->edit($func_id);
        }
    }

    public function submitFuncionario(){
        $daddosValidado = Validator::make($this->dados,
            [
                'categoria_id'=>'bail|required',
                'escola_id'=>'bail|required',
                'nome'=>'bail|required',
                'nomeDoPai'=>'bail|required',
                'nomeDaMae'=>'bail|required',
                'numBi'=>'bail|required|unique:funcionarios',
                'dataEmissao'=>'bail|required',
                'dataNascimento'=>'bail|required',
                'provincia'=>'bail|required',
                'municipio'=>'bail|required',
                'genero'=>'bail|required',
                'contacto'=>'bail|required',
                'email'=>'bail|required|email|unique:funcionarios',
                'funcao'=>'bail|required',
                'grauAcademico'=>'bail|required',
                'areaFormacao'=>'bail|required',
                'institutoDeFormacao'=>'bail|required',
                'numAgente'=>'bail|required|unique:funcionarios',
                'inicioFuncoes'=>'bail|required',
            ], 
            $messages = [
                'numBi.required' => 'Este nº de Bilhete já pertence a um funcionário',
                'numAgente.required' => 'Este nº de agente já pertence a um funcionário',
                'email.email' => 'Este e-mail já pertence a um funcionário',
            ])->validate();

        funcionario::create($daddosValidado);
        $this->reset();
        $this->emitTo('admin.lista-funcionário', '$refresh');
        $this->dispatchBrowserEvent('closeModalFormFuncionario');
    }

    private function edit($func_id){

        $infoFuncComEscola = funcionario::with('pertenceEscola')->find($func_id);
        $infoFuncComCategoria = funcionario::with('pertenceCategoria')->find($func_id);
        
        $data = Carbon::parse($infoFuncComEscola->dataNascimento);
        $this->dados = $infoFuncComEscola->toArray();
        $this->escola=$infoFuncComEscola->pertenceEscola->nomeEscola;
        $this->escolaID=$infoFuncComEscola->id;
        $this->categoria=$infoFuncComEscola->pertenceCategoria->nomeCategoria;
        $this->categoriaID=$infoFuncComEscola->categoria_id;

        
        $this->funcEdit = $infoFuncComEscola;
    }


        public function submitAlterar(){
        $daddosValidado = Validator::make($this->dados,
            [
                'categoria_id'=>'bail|required',
                'escola_id'=>'bail|required',
                'nome'=>'bail|required',
                'nomeDoPai'=>'bail|required',
                'nomeDaMae'=>'bail|required',
                'numBi'=>'bail|required|unique:funcionarios,numBi,'.$this->funcEdit->id,
                'dataEmissao'=>'bail|required',
                'dataNascimento'=>'bail|required',
                'provincia'=>'bail|required',
                'municipio'=>'bail|required',
                'genero'=>'bail|required',
                'contacto'=>'bail|required',
                'email'=>'bail|required|email|unique:funcionarios,email,'.$this->funcEdit->id,
                'funcao'=>'bail|required',
                'grauAcademico'=>'bail|required',
                'areaFormacao'=>'bail|required',
                'institutoDeFormacao'=>'bail|required',
                'numAgente'=>'bail|required|unique:funcionarios,numAgente,'.$this->funcEdit->id,
                'inicioFuncoes'=>'bail|required',
            ], 
            $messages = [
                'numBi.required' => 'Este nº de Bilhete já pertence a um funcionário',
                'numAgente.required' => 'Este nº de agente já pertence a um funcionário',
                'email.email' => 'Este e-mail já pertence a um funcionário',

            ])->validate();

        $this->funcEdit->update($daddosValidado);
        $this->reset();
        $this->emitTo('admin.lista-funcionário', '$refresh');
        $this->dispatchBrowserEvent('closeModalFormFuncionario');
    }


}
