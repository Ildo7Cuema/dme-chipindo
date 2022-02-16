<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div wire:ignore.self class="modal fade" id="modal-form-categoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-secondary" id="exampleModalLabel">
                    @if ($action=='store')
                        {{-- true expr --}}
                        Cadastrar nova categoria
                    @else
                        {{-- false expr --}}
                        Alterar categoria
                    @endif
                </h5>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 <div class="row">
                     <div class="form-group col-12">
                         <label class="font-weight-bold">Nome da categoria</label>
                         <input type="text" class="form-control form-control-sm @error('nomeCategoria') is-invalid @enderror" name="nomeCategoria" wire:model.defer="dados.nomeCategoria">

                         @error('nomeCategoria')
                              <span class="text-danger small">{{ $message }}</span>
                         @enderror

                     </div>
                 </div>
              </div>
              <div class="modal-footer">
                    @if ($action=='store')
                        <button type="button" class="btn btn-block btn-sm btn-success text-light" wire:click="submit" aria-label="Close"><i class="fa fa-save"></i> Salvar</button>
                    @else
                        <button type="button" class="btn btn-block btn-sm btn-success text-light" wire:click="submitAlterar" aria-label="Close"><i class="fa fa-save"></i> Salvar alteração</button>
                    @endif
                
              </div>
            </div>
          </div>
    </div>
</div>


@push('scripts')
    {{-- expr --}}

    <script>

        window.addEventListener('closeModal', event => {
            $('#modal-form-categoria').modal('hide');
        })

    </script>


@endpush
