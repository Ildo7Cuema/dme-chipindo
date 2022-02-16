<div>
    {{-- In work, do what you enjoy. --}}
    <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="formModalEmolumento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    {{ $evento }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">

                    <div class="form-group col-12">
                        <label class="text-secondary">Nome do emolumento</label>
                        <input type="text" class="form-control form-control-sm" name="emolumentos" wire:model.defer="dados.emolumentos">

                        @error('emolumentos') <span class="text-danger small"> {{ $message }}</span> @enderror
                    </div>

                    <div class="form-group col-12">
                        <label class="text-secondary">Forma de tratamento</label>
                        <select class="form-control form-control-sm" name="status" wire:model.defer="dados.status">
                            <option>...</option>
                            <option>Pago</option>
                            <option>Não pago</option>
                        </select>
                        @error('status') <span class="text-danger small"> {{ $message }}</span> @enderror
                    </div>

                    <div class="form-group col-12">
                        <label class="text-secondary">Valor por cobrar</label>
                        <input type="text" class="form-control form-control-sm" name="valorPago" wire:model.defer="dados.valorPago">

                        @error('valorPago') <span class="text-danger small"> {{ $message }}</span> @enderror
                    </div>

                </div>
              </div>
              <div class="modal-footer">
                    @if ($evento=='Registar...!')
                        {{-- expr --}}
                        <button type="button" wire:click="submitEmolumento" class="btn btn-outline-primary btn-sm"><i class="fa fa-save"></i> Salvar</button>
                    @else
                        <button type="button" wire:click="submitAlterar" class="btn btn-outline-primary btn-sm"><i class="fa fa-save"></i> Salvar alteração</button>
                    @endif
               </div>
            </div>
          </div>
        </div>

</div>

@push('scripts')

    <script>
        window.addEventListener('closeModalEmolumento', event=>{
            $('#formModalEmolumento').modal('hide');
        })
    </script>

@endpush


