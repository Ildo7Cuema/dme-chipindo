<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <x-slot name="header">
        <h1 class="h5 font-weight-bold">
            {{ __('Secretaria Geral - lista de documentos') }}
        </h1>
    </x-slot>

    <div class="card">
        <div class="card-header bg-dark">
            
        </div>

        <div class="card-body">
            
            <div class="row mt-2">
                <div class="form-group col-12">
                    <span class="font-weight-bold text-secondary">Nome @if ($genero=='M')
                        do
                    @else
                        da
                    @endif  @if ($genero=='M')
                        funcionário
                    @else
                        funcionária
                    @endif : <strong class="text-danger">{{ $nome }}</strong></span>
                </div>
            </div>
            
            <hr heigth="10">

            <div class="row mt-2 text-center">
                <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-secondary font-weight-bold"><strong>Declaração de serviço</strong></label>

                    <a href="#{{-- {{ route('declaracaoServicoPDF', $funcID) }} --}}" data-bs-toggle="modal" data-bs-target="#declServico">
                        <h1>
                            <i class="fa fa-file-pdf text-danger"></i>
                        </h1>
                    </a>

                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-secondary font-weight-bold"><strong>Declaração de tempo de serviço</strong></label>

                    <a href="#" >
                        <h1>
                            <i class="fa fa-file-pdf text-danger"></i>
                        </h1>
                    </a>

                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-secondary font-weight-bold"><strong>Declaração de efectividade</strong></label>

                    <a href="#" >
                        <h1>
                            <i class="fa fa-file-pdf text-danger"></i>
                        </h1>
                    </a>

                </div>


                <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-secondary font-weight-bold"><strong>Declaração de salário elegibilidade e compromisso</strong></label>

                    <a href="#" >
                        <h1>
                            <i class="fa fa-file-pdf text-danger"></i>
                        </h1>
                    </a>

                </div>

            </div>
        </div>

    </div>
</div>

{{-- ««««««««««««««««««««««««««««««««««« ÁREA PARA CARREGAR MODAIS ««««««««««««««««««««««««« --}}
<!-- Modal de Declaração de serviço -->
        <div class="modal fade" id="declServico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Preenchimento do documento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <form method="post" action="{{ route('declaracaoServicoPDF', $funcID ) }}" target="__blank">
                    @csrf
                    <div class="row">

                        <div class="form-outline col-12">
                            <label class="form-label font-weight-bold text-secondary" for="form1">Selecione o emolumento</label>
                            <select class="form-control form-control-sm" name="emolumento" id="form1">
                                <option value="">...</option>
                                @foreach ($emolumento as $element)
                                    <option value="{{ $element->id }}">{{ $element->emolumentos }}</option>
                                @endforeach
                                
                            </select>
                        </div>

                        <div class="form-outline col-12">
                            <label class="form-label text-secondary font-weight-bold" for="form2">
                                Esta declaração destina-se para efeito de:
                            </label>
                            <input id="form2" type="text" class="form-control form-control-sm" name="efeito" placeholder="Efeito">
                        </div>

                        <div class="form-group col-12">
                            <label class="text-secondary font-weight-bold">
                                O Director da instituição
                            </label>
                            <select class="form-control form-control-sm select2" name="entidade">
                                <option value="">...</option>
                                @foreach ($escolas as $entidade)
                                    <option value="{{ $entidade->directorDaEscola }}">{{ $entidade->directorDaEscola }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-12">
                            <label class="text-secondary font-weight-bold">
                                Entidade assinante interina, caso o director não esteja
                            </label>
                            <select class="form-control form-control-sm select2 bg-info" name="entidade2">
                                <option value="">...</option>
                                @foreach ($funcionarios as $entidade)
                                    <option value="{{ $entidade->nome }}">{{ $entidade->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-12">
                            <label class="text-secondary font-weight-bold">Qual é a função de quem interina</label>
                            <input type="text" class="form-control form-control-sm bg-info" name="funcInterino">
                        </div>


                        <div class="form-group col-12">
                            <label class="text-secondary font-weight-bold">
                                Assinar como:
                            </label>
                            <select class="form-control form-control-sm select2" name="assinarComo">
                                <option value="">Sem designação</option>
                                    <option>lic.</option>
                                    <option>MSc.</option>
                                    <option>Dr.</option>
                                    <option>Phd.</option>
                            </select>
                        </div>

                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm text-light" data-bs-dismiss="modal"><i class="fa fa-ban"></i> Anular</button>
                        <button type="submit" class="btn btn-success btn-sm text-light"><i class="fa fa-download"></i> Carregar</button>
                      </div>

            </form>

            </div>
          </div>
        </div>


