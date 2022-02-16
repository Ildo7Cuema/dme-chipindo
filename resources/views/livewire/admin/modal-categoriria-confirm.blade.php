<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="modal-categoria-confirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-danger">
                <h5 class="modal-title text-light" id="exampleModalLabel">
                    Apagar..?
                </h5>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 <i class="fa fa-info-circle"></i> Se apagar, poderá excluir também todos os funcionários cadastrados nessa categoria, tens a certeza?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-block btn-sm btn-danger text-light" wire:click="deleteCategoria"><i class="fa fa-trash"></i> Confirmar</button>
              </div>
            </div>
          </div>
        </div>

</div>

@push('scripts')
    <script>
        window.addEventListener('closeModalConfirmCategoria', event=>{
          $('#modal-categoria-confirm').modal('hide');
        })
    </script>
@endpush