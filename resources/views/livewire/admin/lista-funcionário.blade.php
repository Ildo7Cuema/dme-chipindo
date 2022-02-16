<div>
    {{-- Success is as dangerous as failure. --}}
    <x-slot name="header">
        <h1 class="h5 font-weight-bold">
            Funcionários cadastrados
        </h1>
    </x-slot>

    <div class="row mb-2">

        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
            <input type="text" class="form-control form-control-sm" placeholder="Procurar..." name="procurarFuncionario" wire:model="procurarFuncionario">
        </div>

        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
            <div class="d-flex justify-content-end">
                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-form-funcionario" wire:click="$emit('eventoActionFuncionario', 'store')">
                    <i class="fa fa-plus"></i> Mais funcionário
                </button>  
            </div>

        </div>


    </div> {{-- Fim da linha 1 --}}

    <div class="row mt-2">
        <div class="form-group col-12">

                {{-- Botão dropdown para exportar uma lista em Excel ou em Pdf --}}
                <div class="dropdown mb-2">
                  <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-download mr-2"></i> Exportar lista
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                        <li><a class="dropdown-item" href="{{ route('funcionariosExportExce') }}"><i class="fa fa-file-excel text-success"></i> EXCEL</a>
                            </li>

                        <li><a class="dropdown-item" href="#"><i class="fa fa-file-pdf text-danger"></i> PDF</a>
                            </li>
                                    
                    </ul>
                </div>

        </div>
    </div>



    <div class="card">
        <div class="card-header bg-success">
            
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-striped">
                <tr>
                    <td>Nº</td>
                    <td>Nome</td>
                    <td>Nº do BI</td>
                    <td>Naturalidade</td>
                    <td>Província</td>
                    <td align="center">Opções</td>
                </tr>

                @forelse ($infoFuncionarios as $funcionario)
                    {{-- true expr --}}
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $funcionario->nome }}</td>
                        <td>{{ $funcionario->numBi }}</td>
                        <td>{{ $funcionario->municipio }}</td>
                        <td>{{ $funcionario->provincia }}</td>
                        <td align="center">
                            <div class="dropdown">
                              <a href="#" class="btn btn-sm" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-form-funcionario" wire:click="$emit('eventoActionFuncionario', 'edit', {{ $funcionario->id }})"><i class="fa fa-edit text-success"></i> Alterar</a></li>

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#maisInfoFuncionario" wire:click="$emit('maisInfoFuncionario', {{ $funcionario->id }})"><i class="fa fa-eye text-secondary"></i> Mais informação</a></li>

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-confirm-func" wire:click="$emit('eventoActionFuncionarioDeleteConfirmsFunc', {{ $funcionario->id }})">
                                    <i class="fa fa-trash text-danger"></i> 
                                Apagar</a></li>
                                
                              </ul>
                            </div>
                        </td>
                    </tr>
                @empty
                    {{-- false expr --}}
                    <tr>
                        <td align="center" colspan="6">
                            <span class="text-danger small"> De momento não existem funcionários cadastrados no sistema...!</span>
                        </td>
                    </tr>

                @endforelse
                

            </table>
            </div>

            {{ $infoFuncionarios->links() }}

        </div>
    </div>
</div>

<livewire:admin.modal-form-funcionarios />
<livewire:admin.modal-mais-informcao-funcionario />
<livewire:admin.modal-delete-confirme-funcionario />
