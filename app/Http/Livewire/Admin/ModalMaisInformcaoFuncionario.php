<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\funcionario;
use Carbon\Carbon;
use App\Models\admin\categoria;
use App\Models\admin\escola;
use App\Models\admin\remoneracao;


class ModalMaisInformcaoFuncionario extends Component
{
    protected $listeners = ['maisInfoFuncionario'];
    public $action;

    public $categoria_id;
    public $escola_id;
    public $nome;
    public $nomeDoPai;
    public $nomeDaMae;
    public $numBi;
    public $dataEmissao;
    public $provincia;
    public $municipio;
    public $genero;
    public $contacto;
    public $email;
    public $funcao;
    public $grauAcademico;
    public $areaFormacao;
    public $institutoDeFormacao;
    public $numAgente;
    public $dataNascimento;

    public $categoria;
    public $categoriaID;
    public $vencimento;
    public $escola;
    public $escolaID;
    public $func_id;
    public $idade;
    public $salarioPorExtenso;


    public function render()
    {
        return view('livewire.admin.modal-mais-informcao-funcionario');
    }

    public function maisInfoFuncionario($idFuncionario){
        $this->func_id = $idFuncionario;

        if($idFuncionario){
            $this->apresentar($idFuncionario);
        }

    }

     private function apresentar($func_id){

        $infoFuncComEscola = funcionario::with('pertenceEscola')->find($func_id);
        $infoFuncComCategoria = funcionario::with('pertenceCategoria')->find($func_id);
        
        $dataNasc = Carbon::parse($infoFuncComEscola->dataNascimento)->settings([
            "locale" => "pt_BR",
            "timezone" =>"Africa/luanda",
        ]);

        $dataEmiss = Carbon::parse($infoFuncComEscola->dataEmissao)->settings([
            "locale" => "pt_BR",
            "timezone" =>"Africa/luanda",
        ]);


        $calcIdade = Carbon::parse($infoFuncComEscola->dataNascimento);


        $this->categoria_id=$infoFuncComEscola->categoria_id;
        $this->escola_id=$infoFuncComEscola->escola_id;
        $this->escolaID = $this->escola_id;
        $this->categoriaID = $this->categoria_id;
        $this->escola = $infoFuncComEscola->pertenceEscola->nomeEscola;
        $this->categoria = $infoFuncComCategoria->pertenceCategoria->nomeCategoria;
        
        //buscar vencimento segundo a categoria
        $salario_id = $infoFuncComCategoria->pertenceCategoria->id;

        $vencimentoSarial = categoria::with('valorSalario')->find($salario_id);
        $this->vencimento=$vencimentoSarial->valorSalario->salario;
        $this->salarioPorExtenso=$vencimentoSarial->valorSalario->valorPorExtenso;
        

    

        $this->nome=$infoFuncComEscola->nome;
        $this->nomeDoPai=$infoFuncComEscola->nomeDoPai;
        $this->nomeDaMae=$infoFuncComEscola->nomeDaMae;
        $this->numBi=$infoFuncComEscola->numBi;
        $this->dataEmissao=$dataEmiss->isoFormat('LL');
        $this->provincia=$infoFuncComEscola->provincia;
        $this->municipio=$infoFuncComEscola->municipio;
        $this->genero=$infoFuncComEscola->genero;
        $this->contacto=$infoFuncComEscola->contacto;
        $this->email=$infoFuncComEscola->email;

        $this->funcao=$infoFuncComEscola->funcao;

        $this->idade=$infoFuncComEscola->idade;

        $this->grauAcademico=$infoFuncComEscola->grauAcademico;
        $this->areaFormacao=$infoFuncComEscola->areaFormacao;
        $this->institutoDeFormacao=$infoFuncComEscola->institutoDeFormacao;
        $this->numAgente=$infoFuncComEscola->numAgente;
        $this->dataNascimento=$dataNasc->isoFormat('LL');
        $this->idade=$calcIdade->age;

        $this->func_id = $infoFuncComCategoria->id;

        if ($infoFuncComEscola->genero=='M') {
            // code...
            $this->genero = 'Masculino';
        } else {
            // code...
            $this->genero = 'Femenino';

        }


        
    }
}
