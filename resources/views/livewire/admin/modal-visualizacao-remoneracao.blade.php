<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
        <div wire:ignore.self class="modal fade" id="modal-eye-remoneracao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">
                    Mais informações sobre o valor salarial selecionado
                </h5>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 <div class="row">
                     <div class="form-group col-12">
                         <label class="font-weight-bold">Categoria:</label>
                         <span class="font-weight-bold"><strong>{{ $infoCategoria }}</strong></span>
                     </div>

                     <div class="form-group col-12">
                         <label class="font-weight-bold">Valor salarial:</label>
                         <span class="font-weight-bold"><strong>{{ $salario }}</strong></span>
                     </div>
                 </div>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>

</div>
