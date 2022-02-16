<div>
    {{-- The whole world belongs to you. --}}
    <x-slot name="header">
        <h1 class="h5 font-weight-bold">
            <div class="row mb-0">
                <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    {{ __('Secretaria Geral') }}
                </div>
            </div>
        </h1>
    </x-slot>


    <div class="card mt-0">
        <div class="card-header bg-info">
            
        </div>

        <div class="card-body">
            
            <div class="row py-4 text-center">

                <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <label class="text-secondary font-weight-bold"><strong>Registo de emolumentos</strong></label>

                    <a href="#" data-bs-toggle="modal" data-bs-target="#formModalEmolumento" wire:click="$emit('eventoActionEmolumento', 'Registar...!')">
                        <h1>
                            <i class="fa fa-eraser text-secondary"></i>
                        </h1>
                    </a>

                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">

                    <label class="text-secondary font-weight-bold"><strong>Declarações & outros documentos</strong></label>
                    
                    <a href="{{ route('declaracao') }}" class="">
                        <h1>
                            <i class="fa fa-gavel text-secondary"></i>
                        </h1>
                    </a>
                    
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    
                    <label class="text-secondary font-weight-bold"><strong>Finanças</strong></label>
                    
                    <a href="#" class="">
                        <h1>
                            <i class="fa fa-coffee text-secondary"></i>
                        </h1>
                    </a>

                </div>

            </div>

        </div>

        <div class="card-footer">
            
        </div>
    </div>


    {{-- Lista dos emolumentos --}}

    <div class="card">
        <div class="card-header bg-info">
            
        </div>

        <div class="card-body">

            <div class="row mb-2">
                <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <input type="text" wire:model="procurar" class="form-control form-control-sm" placeholder="Procurar...!" name="procurar">
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="table table-sm table-striped">

                    <tr class="bg-dark">
                        <td class="text-light">Nº</td>
                        <td class="text-light">Emolumento Registados</td>
                        <td class="text-light">Valor por cobrar</td>
                        <td class="text-light" align="center">Status</td>
                        <td class="text-light" align="center">Opções</td>
                    </tr>

                @forelse ($emolumentos as $emolumento)
            {{-- expr --}}
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $emolumento->emolumentos }}</td>
                        <td>{{ number_format($emolumento->valorPago, 2) }}</td>
                        <td align="center">{{ $emolumento->status }}</td>
                        <td align="center">
                            
                            <div class="dropdown">
                              <a href="#" class="btn btn-sm" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#formModalEmolumento" wire:click="$emit('eventoActionEmolumento', 'Alterar...!', {{ $emolumento->id }})"><i class="fa fa-edit text-success"></i> Alterar</a></li>

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-emolumento-confirm-delete" wire:click="$emit('eventoConfirmEmolumentoDelete', {{ $emolumento->id }})">
                                    <i class="fa fa-trash text-danger"></i> 
                                Apagar</a></li>
                                
                              </ul>
                            </div>


                        </td>
                    </tr>
                @empty
                    {{-- empty expr --}}
                    <tr>
                        <td colspan="5" align="center">
                            <span class="text-danger">De momento não existem emolumentos cadastrados no sistema...!</span>
                        </td>
                    </tr>
                @endforelse
                    
                </table>

                {{ $emolumentos->links() }}

            </div>
            

        </div>

        <div class="card-footer">
            
        </div>
    </div>
</div>

<livewire:admin.modal-form-emolumento />
<livewire:admin.modal-emolumento-confirm-delete />
