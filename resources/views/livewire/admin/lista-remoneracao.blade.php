<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <x-slot name="header">
        <h1 class="h5 font-weight-bold">
            Salários registados
        </h1>
    </x-slot>

<div class="row mb-2">


    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
        <input type="text" class="form-control form-control-sm font-weight-bold" placeholder="Procurar..." name="procurarSalario" wire:model="procurarSalario">
    </div>
    
    <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8">

        <div class="d-flex justify-content-end">
            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-form-remoneracao" wire:click="$emit('eventoActionRemoneracao', 'store')">
                 <i class="fa fa-plus"></i> Mais valor de salário
            </button>
        </div>
    </div>


</div>
    <div class="card">
        <div class="card-header bg-success">
            
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm">
                <tr>
                    <td>Nº</td>
                    <td>Valores salarial</td>
                    <td>Valores salarial por extenso</td>
                    <td align="center">Opções</td>
                </tr>

            @forelse ($infoRemoneracao as $remoneracao)
                {{-- expr --}}
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $remoneracao->salario }}</td>
                    <td>{{ $remoneracao->valorPorExtenso }}</td>
                    <td align="center">
                        <div class="dropdown">
                              <a href="#" class="btn btn-sm" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-form-remoneracao" wire:click="$emit('eventoActionRemoneracao', 'edit', {{ $remoneracao->id }})"><i class="fa fa-edit text-success"></i> Alterar</a></li>

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-eye-remoneracao" wire:click="$emit('eventoVisualRemoneracao', {{ $remoneracao->id }})"><i class="fa fa-eye text-secondary"></i> Visualizar</a></li>

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-remoneracao-delete-confirm" wire:click="$emit('eventoConfirmDeleteRemoneracao', {{ $remoneracao->id }})">
                                    <i class="fa fa-trash text-danger"></i> 
                                Apagar</a></li>
                                
                              </ul>
                            </div>

                    </td>
                </tr>
            @empty
                {{-- empty expr --}}
                <tr>
                    <td colspan="3" align="center">
                        <span class="text-danger">De momento não existem salários registados</span>
                    </td>
                </tr>
            @endforelse

            </table>
            </div>

            {{ $infoRemoneracao->links() }}

        </div>
    </div>

</div>

<livewire:admin.modal-form-remoneracao />
<livewire:admin.modal-visualizacao-remoneracao />
<livewire:admin.modal-delete-remoneracao />
