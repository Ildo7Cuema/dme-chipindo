<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\escola;

class ModalFormEscola extends Component
{
    public $action;
    public $escolaId;
    public $escola = [];
    public $dados = [];

    protected $listeners = ['eventoAction' => 'criarEvento'];

    public function render()
    {
        return view('livewire.admin.modal-form-escola');
    }

    public function criarEvento($action, $escola_id=''){
        $this->reset();
        $this->action = $action;
        if ($escola_id) {
            // caso exista um ID vai para o método editar
            $this->edit($escola_id);
        }
    }

    // funcao para registar os dados no banco de dados...

    public function submit(){
        
        $validarDados = Validator::make($this->dados,
         [
            'nomeEscola' => 'required',
            'numEscola' => 'nullable|numeric|unique:escolas',
            'num_contribuinte_fiscal'=>'nullable|unique:escolas',
            'localizacao' => 'required',
            'zip'=>'nullable|unique:escolas',
            'provincia' => 'required',
            'municipio' => 'required',
            'formaJuridica' => 'required',
            'subDirector'=>'nullable|unique:escolas',
            'subDirectorPedagogico'=>'nullable|unique:escolas',
            'directorDaEscola' => 'required|unique:escolas',
            'secretario' => 'required|unique:escolas',
            'contacto' => 'required|min:9|max:9',
            'email'=>'bail|required|email|unique:escolas',
            'tipoConstrucao' => 'required',
        ])->validate();

        escola::create($validarDados);

        $this->reset();
       
        //$this->emitTo('admin.lista-escola', '$refresh');
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message', 'Escola cadastrada com sucesso');
        $this->emitTo('admin.lista-escola', '$refresh');
        //return redirect()->to('/escola');
    }

// funcao para alterar os dados no banco de dados
    public function submitAlterar(){
    
        $validarDados = Validator::make($this->dados,
         [
            'nomeEscola' => 'required',
            'numEscola' => 'nullable|numeric|unique:escolas,numEscola,'.$this->escola->id,
            'num_contribuinte_fiscal'=>'nullable|unique:escolas,num_contribuinte_fiscal,'.$this->escola->id,
            'provincia' => 'required',
            'municipio' => 'required',
            'localizacao' => 'required',
            'zip'=>'nullable|unique:escolas,zip,'.$this->escola->id,
            'formaJuridica' => 'required',
            'directorDaEscola' => 'required|unique:escolas,directorDaEscola,'.$this->escola->id,
            'subDirector' => 'nullable',
            'subDirectorPedagogico'=>'nullable',
            'secretario' => 'required',
            'contacto' => 'required|min:9|max:9',
            'email'=>'bail|required|email|unique:escolas,email,'.$this->escola->id,
            'tipoConstrucao' => 'required',
        ])->validate();

        $this->escola->update($validarDados);

        $this->reset();
        $this->dispatchBrowserEvent('closeModal');
        
        //return redirect()->to('/escola');
        $this->emitTo('admin.lista-escola', '$refresh');
        session()->flash('message', 'Dados da escola alterado com sucesso');
        
    }

    private function edit($escola_id){

        $infoEscola = escola::find($escola_id);

        $this->escola = $infoEscola;

        //busca os dados em forma de array(json) para preencher nos campos
        $this->dados = $infoEscola->toArray();

    }
}
