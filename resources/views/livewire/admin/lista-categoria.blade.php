<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    <x-slot name="header">
        <h1 class="h5 font-weight-bold">
            Categorias registadas
        </h1>
    </x-slot>

<div class="row mb-2">


    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
        <input type="text" class="form-control form-control-sm" placeholder="Procurar..." name="procurarCategoria" wire:model="procurarCategoria">
    </div>

    <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div class="d-flex justify-content-end">
            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-form-categoria" wire:click="$emit('eventoActionCategoria', 'store')">
                 <i class="fa fa-plus"></i> Mais categoria
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
                    <td>Categorias</td>
                    <td align="center">Opções</td>
                </tr>

            @forelse ($listaCategoria as $categoria)
                {{-- expr --}}
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $categoria->nomeCategoria }}</td>
                    <td align="center">
                        <div class="dropdown">
                              <a href="#" class="btn btn-sm" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-form-categoria" wire:click="$emit('eventoActionCategoria', 'edit', {{ $categoria->id }})"><i class="fa fa-edit text-success"></i> Alterar</a></li>

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-categoria-confirm" wire:click="$emit('eventoConfirmCategoria', {{ $categoria->id }})">
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
                        <span class="text-danger">De momento não existem categorias registadas</span>
                    </td>
                </tr>
            @endforelse

            </table>
            </div>

            {{ $listaCategoria->links() }}

        </div>
    </div>
</div>

<livewire:admin.modal-form-categoria />
<livewire:admin.modal-categoriria-confirm />

