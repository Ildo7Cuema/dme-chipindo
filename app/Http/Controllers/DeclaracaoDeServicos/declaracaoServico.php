<?php

namespace App\Http\Controllers\DeclaracaoDeServicos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DeclaracaoServico_request;
use PDF;
use App\Models\admin\funcionario;
use App\Models\admin\categoria;
use App\Models\admin\escola;
use Carbon\Carbon;

class declaracaoServico extends Controller
{
    //
    

    public function documentoPDF(DeclaracaoServico_request $request, $idFunc){

        setlocale(LC_ALL, "pt_BR", "ptb");

        $mesAno=strftime("%B / %Y", strtotime(date("d-m-Y")));
        $diaMesAno = strftime("%d de %B de %Y", strtotime(date("d-m-Y")));
        $infoFunc = funcionario::find($idFunc);

        $dataNasc = Carbon::parse($infoFunc->dataNascimento)->settings([
            "locale" => "pt_BR",
            "timezone" =>"Africa/luanda",
        ]);



        //verificara se a caixa de entidade assinante é o Director Geral
        $designacaoEntidadeAssinante = $request->entidade2 =='' ? 'O Director Municipal':'Na ausência do Director Municipal';

        //imprimir o nome da entidade assinante
        $nomeAssinante = $request->entidade2 =='' ? $request->entidade:$request->entidade2;

        //Vericação do gênero e substituição de palavra
        $artigo = $infoFunc->genero=='M' ? 'o' : 'a';
        $portadorOuPortadora = $infoFunc->genero=='M' ? 'portador' : 'portadora';
        $professorOuProfessora = $infoFunc->genero=='M' ? 'Professor' : 'Professora';
        $senhorOuSenhora = $infoFunc->genero=='M' ? 'senhor' : 'senhora';

        $pai = $infoFunc->nomeDoPai;
        $mae = $infoFunc->nomeDaMae;
        $naturalProvincia = $infoFunc->provincia;
        $naturalMunicipio = $infoFunc->municipio;
        $numBi = $infoFunc->numBi;
        $dataEmissao=$infoFunc->dataEmissao;
        $numAgente=$infoFunc->numAgente;
        $funcao=$infoFunc->funcao;

        $dataEmis = Carbon::parse($dataEmissao)->settings([
            "locale" => "pt_BR",
            "timezone"=>"Africa/luanda",
        ]);

        $dataInicioFunc = Carbon::parse($infoFunc->inicioFuncoes)->settings([
            "locale" => "pt_BR",
            "timezone"=>"Africa/luanda",
        ]);

        //buscar data de entidade assinante
        $entidadeId = escola::where('directorDaEscola', $request->entidade)->first();
        $nomeEntidadeDataAbaixoDocumento=$entidadeId->nomeEscola;

        // buscar dados em outra tabela
        $numFiscal = $infoFunc->pertenceEscola->num_contribuinte_fiscal;
        $nomeEntidade = $infoFunc->pertenceEscola->nomeEscola;
        $municipio = $infoFunc->pertenceEscola->municipio;
        $organismo = $infoFunc->pertenceEscola->num_contribuinte_fiscal;
        $categoria = $infoFunc->pertenceCategoria->nomeCategoria;
        $ultimoCaracter = substr($municipio, -1);
        $artigoMunicipio = $ultimoCaracter=='o' ? 'no': 'em';

        //buscar rendimento mensal liquido
        $buscaCategoriaId = $infoFunc->pertenceCategoria->id;
        $categoriaBuscaSalario = categoria::find($buscaCategoriaId);
        $rendimentoMensal = $categoriaBuscaSalario->valorSalario->salario;
        $rendimentoMensalExtenso = $categoriaBuscaSalario->valorSalario->valorPorExtenso;

        //substituir a string professor para professora caso seja femenino
        $professorProfessora = str_ireplace('Professor', $professorOuProfessora, $categoria);

        //Pegar o primeiro caracter para definir o artigo antecedente da entidade
        $letraIniciante = substr($nomeEntidadeDataAbaixoDocumento, 0, 1);
        $artigoAntecedenteDeEntidade = $letraIniciante=='C' ? 'o':'a';

        //adicionar funç]ao do interino
        $funcAssinanteInterino = $designacaoEntidadeAssinante == 'Na ausência do Director Municipal' ? "(".$request->funcInterino.")": '';




        $pdf = PDF::loadView('escola.desclaracaoServico.declaracaoDeServico', [
            'mesAno' => $mesAno,
            'funcionario' =>$infoFunc,
            'numDeFiscal' => $numFiscal,
            'nomeEntidade' => $nomeEntidade,
            'municipio' => $municipio,
            'artigo' => $artigo,
            'senhorOuSenhora' => $senhorOuSenhora,
            'pai' => $pai,
            'mae' => $mae,
            'dataNascimento' => $dataNasc->isoFormat('LL'),
            'artigoMunicipio' => $artigoMunicipio,
            'naturalProvincia' => $naturalProvincia,
            'naturalMunicipio' => $naturalMunicipio,
            'portadorOuPortadora' => $portadorOuPortadora,
            'numBi' => $numBi,
            'dataEmissao' => $dataEmis->isoFormat('LL'),
            'numAgente'=>$numAgente,
            'organismo'=>$organismo,
            'funcao'=>$funcao,
            'categoria'=>$categoria,
            'dataInicioFunc'=>$dataInicioFunc->isoFormat('LL'),
            'rendimentoMensal'=>$rendimentoMensal,
            'rendimentoMensalExtenso'=>$rendimentoMensalExtenso,
            'efeito'=> $request->efeito,
            'nomeEntidadeDataAbaixoDocumento'=>$nomeEntidadeDataAbaixoDocumento,
            'diaMesAno'=>$diaMesAno,
            'designacaoEntidadeAssinante'=>$designacaoEntidadeAssinante,
            'nomeAssinante'=>$nomeAssinante,
            'assinarComo'=>$request->assinarComo,
            'professorOuProfessora'=>$professorProfessora,
            'artigoAntecedenteDeEntidade'=>$artigoAntecedenteDeEntidade,
            'funcAssinanteInterino'=>$funcAssinanteInterino,
        ]);

        return $pdf->stream('Declaração_de_serviço.pdf');
    }
}
