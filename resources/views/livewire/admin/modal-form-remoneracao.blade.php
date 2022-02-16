<div>
    {{-- Do your work, then step back. --}}
    <div wire:ignore.self class="modal fade" id="modal-form-remoneracao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-secondary" id="exampleModalLabel">
                    @if ($action=='store')
                        {{-- true expr --}}
                        Cadastrar novo valor salarial
                    @else
                        {{-- false expr --}}
                        Alterar valor salarial
                    @endif
                </h5>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 <div class="row">
                     <div class="form-group col-12">
                         <label class="font-weight-bold">Selecione uma categoria</label>
                         <select class="form-control form-control-sm @error('categoria_id') is-invalid @enderror" wire:model.defer="dados.categoria_id">
                            @if ($categoria_id)
                                {{-- true expr --}}
                                <option value="{{ $categoriaId }}">{{ $categoria_id }}</option>

                                <option value="">...</option>

                                 @forelse ($infoCategoria as $categoria)
                                     {{-- expr --}}
                                     <option value="{{ $categoria->id }}">{{ $categoria->nomeCategoria }}</option>
                                 @empty
                                     {{-- empty expr --}}
                                     <option>Sem categoria cadastrada</option>
                                 @endforelse


                            @else
                                {{-- false expr --}}
                                <option value="">...</option>
                             @forelse ($infoCategoria as $categoria)
                                 {{-- expr --}}
                                 <option value="{{ $categoria->id }}">{{ $categoria->nomeCategoria }}</option>
                             @empty
                                 {{-- empty expr --}}
                                 <option>Sem categoria cadastrada</option>
                             @endforelse

                            @endif
                             
                             
                         </select>

                         @error('categoria_id')
                            <span class="text-danger small">{{ $message }}</span>
                         @enderror

                     </div>
                     <div class="form-group col-12">
                         <label class="font-weight-bold">Valor salarial correspondente</label>
                         <input type="text" class="form-control form-control-sm @error('salario') is-invalid @enderror" name="salario" wire:model.defer="dados.salario">
                         @error('salario')
                            <span class="text-danger small"> {{ $message }}</span>
                         @enderror

                     </div>

                     <div class="form-group col-12">
                         <label class="font-weight-bold">Valor salarial por extenso</label>
                         <input type="text" class="form-control form-control-sm @error('valorPorExtenso') is-invalid @enderror" name="valorPorExtenso" wire:model.defer="dados.valorPorExtenso">
                         @error('valorPorExtenso')
                            <span class="text-danger small"> {{ $message }}</span>
                         @enderror

                     </div>
                 </div>
              </div>
              <div class="modal-footer">
                   @if ($action=='store')
                        <button type="button" class="btn btn-block btn-sm btn-success text-light" wire:click="submit" aria-label="Close"><i class="fa fa-save mr-2"></i> Salvar</button>
                    @else
                        <button type="button" class="btn btn-block btn-sm btn-success text-light" wire:click="submitAlterar" aria-label="Close"><i class="fa fa-save mr-2"></i> Salvar alteração</button>
                    @endif
              </div>
            </div>
          </div>
    </div>
</div>

@push('scripts')
  
  <script>
      window.addEventListener('closeModalRemoneracao', event=>{
        $('#modal-form-remoneracao').modal('hide');
      })
  </script>

@endpush
