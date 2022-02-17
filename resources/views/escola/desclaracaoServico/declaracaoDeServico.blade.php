@include('include_print_pdf.header')

    <div class="container mt-4">
        <br>
        <div class="row">
            <div class="form-group col-12 text-center">

                    <strong>DECLARAÇÃO DE SERVIÇO Nº 0{{ $numDeSaidaDocumento }} / <span style="text-transform: uppercase;">{{ $mesAno }}</span></strong>

            </div>
        </div>
        
    	Para os efeitos tidos por conveniência, {{ $artigoAntecedenteDeEntidade }} {{ $nomeEntidadeDataAbaixoDocumento }} com sede {{ $artigoMunicipio }} {{ $municipio }}, contribuinte fiscal nº {{ $numDeFiscal }}, Declara que {{ $artigo }} {{ $senhorOuSenhora }} <b style="text-transform: capitalize;">{{ $funcionario->nome }}</b>, filh{{ $artigo }} de {{ $pai }} e de {{ $mae }}, nascid{{ $artigo }} aos {{ $dataNascimento }}, natural do Lubango, Município do Lubango, Província de {{ $naturalProvincia }}, {{ $portadorOuPortadora }} do B.I nº {{ $numBi }}, emitido pelo Arquivo de Identificação Nacional, aos {{ $dataEmissao }}.</p>
        <p></p>
        <p>É funcionári{{ $artigo }} em efectivo serviço colocad{{ $artigo }} neste Município com o nº de Agente: {{ $numAgente }}, organismo {{ $organismo }}, desempenhando a função de {{ $professorOuProfessora }}, vinculado ao contrato de trabalho por tempo indeterminado desde {{ $dataInicioFunc }}, auferindo um rendimento mensal líquido cerca de {{ $rendimentoMensal }} ({{ $rendimentoMensalExtenso }} Kwz).</p>

        <p>Esta Declaração destina-se para efeito de: <strong>{{ $efeito }}.</strong></p>
        
        <p></p>

        <p>E para que não lhe ponham qualquer impedimento, mandei passar a presente Declaração que vai por mim devidamente assinada e autenticada com o carimbo a óleo em uso nesta Instituição.</p>

        
        {{-- »»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»» --}}
        {{-- Codificação para footer do documento data da assinatura e exibição do nome quem assina  --}}
        <div class="row">
            <div class="col-12 text-center">
                <div style="text-transform:uppercase;">{{ $nomeEntidadeDataAbaixoDocumento }}, {{ $diaMesAno }}</div>
            </div>
        <br>
        <br>
        {{-- »»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»» --}}
        {{-- Codificação para footer do documento de exibição do nome quem assina  --}}
            <div class="col-12 text-center mt-4">
                <label><strong>{{ $designacaoEntidadeAssinante }}</strong></label>

                <p></p>

                <label>// {{ $assinarComo }} {{ $nomeAssinante }} //</label>
                <p class="mt-0 small"><label class="mt-0 text-dark">{{ $funcAssinanteInterino }}</label></p>
            </div>

        </div>

    </div>

@include('include_print_pdf.footer')

    