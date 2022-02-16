<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <x-slot name="header">
          <h2 class="h5 font-weight-bold">
              {{ __('Escolas registadas') }}
          </h2>
    </x-slot>

    <div class="row mb-2">

        <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
            <input type="text" class="form-control form-control-sm font-weight-bold" placeholder="Procurar..." name="procurarEscola" wire:model="procurarEscola">
        </div>

        <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 mt-2">

            <div class="d-flex justify-content-end">

                <button class="btn btn-sm btn-outline-primary mr-4" data-bs-toggle="modal" data-bs-target="#modal-form-escola" wire:click="$emit('eventoAction', 'store')">
                  <i class="fa fa-plus-circle"></i> Nova escola
                </button>

            </div>

        </div>

    </div>

    <div class="row mt-2">
            <div class="dropdown mb-2">
              <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-download mr-2"></i> Exportar lista
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                    <li><a class="dropdown-item" href="{{ route('escolaExportExce') }}"><i class="fa fa-file-excel text-success"></i> EXCEL</a>
                        </li>

                    <li><a class="dropdown-item" href="#"><i class="fa fa-file-pdf text-danger"></i> PDF</a>
                        </li>
                                
                </ul>
            </div>
    </div>

    <div class="card">
        <div class="card-header bg-primary"></div>

        <div class="card-body">
         
            <div class="form-group col-12 text-center">
                @if (session()->has('message'))
                    <div class="alert alert-info">
                        <i class="fa fa-info-circle"></i> {{ session('message') }}
                    </div>
                @endif
            </div>

               <div class="table-responsive">
                   <table class="table table-striped table-sm">
                    <tr>
                        <td>Nº</td>
                        <td>Escolas</td>
                        <td>Nº da escola</td>
                        <td>Localização</td>
                        <td align="center">Opções</td>
                    </tr>

                  @forelse ($inforEscola as $escola)
                    {{-- expr --}}
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $escola->nomeEscola }}</td>
                        <td>{{ $escola->numEscola }}</td>
                        <td>{{ $escola->localizacao }}</td>
                        <td align="center">
                            <div class="dropdown">
                              <a href="#" class="btn btn-sm" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-form-escola" wire:click.prevent="$emit('eventoAction', 'edit', {{ $escola->id }})"><i class="fa fa-edit text-success"></i> Alterar</a></li>

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#detalhes-escola" wire:click="$emit('detalhes', {{ $escola->id }})"><i class="fa fa-eye text-secondary"></i> Visualizar</a></li>

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-confirm" wire:click="$emit('eventoConfirm', {{ $escola->id }})">
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
                                <span class="text-danger">De momento não tem nehuma escola registada...!</span>
                            </td>
                        </tr>
                    @endforelse

                    
                    
                </table>

               </div>
                {{ $inforEscola->links() }}

        </div>
        
        

    </div>


</div>


<livewire:admin.modal-form-escola />
<livewire:admin.modal-delete-confirm />
<livewire:admin.detalhes-escola />
