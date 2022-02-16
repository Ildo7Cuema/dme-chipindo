<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\escola;

class DetalhesEscola extends Component
{
    public $nomeDaEscola;
    public $numeroDaEscola;
    public $localizacao;
    public $tipoDeConstrucao;
    public $formaJuridica;
    public $directorDaEscola;
    public $subDirectorDaEscola;
    public $subDirectorPedagogico;
    public $secretario;
    public $contacto;
    public $escolaID;
    protected $listeners = ['detalhes'];

    public function render()
    {

        return view('livewire.admin.detalhes-escola');
    }


    public function detalhes($escola_id){
        $this->escolaID = $escola_id;
        if($this->escolaID){
            $this->detalhesDaEscola($escola_id);
        }
    }

    private function detalhesDaEscola($escola_id){
        $infoEscola = escola::find($escola_id);
        $this->nomeDaEscola = $infoEscola->nomeEscola;
        $this->numeroDaEscola=$infoEscola->numEscola;
        $this->localizacao=$infoEscola->localizacao;
        $this->tipoDeConstrucao=$infoEscola->tipoConstrucao;
        $this->formaJuridica=$infoEscola->formaJuridica;
        $this->directorDaEscola=$infoEscola->directorDaEscola;
        $this->subDirectorDaEscola=$infoEscola->subDirector;
        $this->subDirectorPedagogico=$infoEscola->subDirectorPedagogico;
        $this->secretario=$infoEscola->secretario;
        $this->contacto=$infoEscola->contacto;
    }


}
