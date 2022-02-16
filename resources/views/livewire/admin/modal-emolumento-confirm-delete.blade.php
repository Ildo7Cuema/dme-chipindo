<div>
    {{-- Be like water. --}}
    <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="modal-emolumento-confirm-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Apagar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <span class="text-secondary font-weight-bold">
                <i class="fa fa-info-circle"></i> Tens a certeza que desejas apagar esse emolumento...!</span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger text-light" wire:click="submitEmolumento">
                    <i class="fa fa-trash "> Confirmar</i>
                </button>
              </div>
            </div>
          </div>
        </div>


</div>

@push('scripts')

    <script>

            window.addEventListener('closeModalConfirmEmolumento', event=>{
                $('#modal-emolumento-confirm-delete').modal('hide');
            })        

    </script>

@endpush
