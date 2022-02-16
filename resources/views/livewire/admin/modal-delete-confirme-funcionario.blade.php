<div>
    {{-- In work, do what you enjoy. --}}
        <div wire:ignore.self class="modal fade" id="modal-delete-confirm-func" tabindex="-1"    aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-danger">
                <h5 class="modal-title text-light" id="exampleModalLabel">
                    Apagar..?
                </h5>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 Tens a certeza que desejas apagar os dados de: <strong>{{ $nome }}</strong> ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-block btn-sm btn-danger text-light" wire:click="deleteFunc"><i class="fa fa-trash"></i> Confirmar</button>
              </div>
            </div>
          </div>
        </div>
</div>

@push('scripts')
  <script>
      window.addEventListener('closeModalConfirmFuncionario', event=>{
        $('#modal-delete-confirm-func').modal('hide');
      })
  </script>
@endpush
