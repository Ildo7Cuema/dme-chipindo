<div>
    <x-slot name="header">
        <h1 class="h5 font-weight-bold">
            {{ __('Secretaria Geral - Declarações de Serviço e outras') }}
        </h1>
    </x-slot>

    <div class="card">
        <div class="card-header bg-success">
            
        </div>

        <div class="card-body">
            <div class="row text-center">

                <div class="form-group col-12">
                    <label class="text-danger">
                        <strong>Faça a busca do funcionário</strong>
                    </label>
                    <h1><i class="fa fa-search text-primary"></i></h1>
                    <input type="text" class="form-control form-control-sm text-center" placeholder="Procurar por (nome, nº de Bi ou nº de agente )" name="procurar" wire:model="procurarFuncionario">
                </div>
                
            </div>

            <div class="table-responsive mt-4">
                <table class="table table-sm">
                    <tr class="bg-dark text-light">
                        <td>Nº</td>
                        <td>Nome do funcionário</td>
                        <td>Número de agente</td>
                        <td>Número de Bilhete</td>
                        <td align="center">Doc.</td>
                    </tr>
                    @forelse ($funcionario as $func)
                        {{-- expr --}}
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $func->nome }}</td>
                            <td>{{ $func->numAgente }}</td>
                            <td>{{ $func->numBi }}</td>
                            <td align="center">
                            <a title="Ír para lista de documentos" href="{{ route('LsDseO', $func->id, $func->nome ) }}">
                                    <i class="fa fa-file texte-success"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" align="center" class="text-danger small">
                                Funcionário(a), não encontrdo(a)...!
                            </td>
                        </tr>
                    @endforelse
                </table>

                {{ $funcionario->links() }}

            </div>

        </div>

        <div class="card-footer">

        </div>
    </div>
</div>
