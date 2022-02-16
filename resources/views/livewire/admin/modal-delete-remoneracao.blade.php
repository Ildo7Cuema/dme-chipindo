<div>
    {{-- Be like water. --}}
        <div wire:ignore.self class="modal fade" id="modal-remoneracao-delete-confirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-danger">
                <h5 class="modal-title text-light" id="exampleModalLabel">
                    Apagar..?
                </h5>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 Tens a certeza que desejas apagar este valor salarial..?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-block btn-sm btn-danger text-light" wire:click="deleteRemoneracao"><i class="fa fa-trash"></i> Confirmar</button>
              </div>
            </div>
          </div>
        </div>
</div>
