<div>
    {{-- In work, do what you enjoy. --}}
    <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="detalhes-escola" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header bg-info">
                <h5 class="modal-title text-light" id="exampleModalLabel">
                    Mais informações sobre a escola
                </h5>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-lg-4">

                         <div class="text-secondary">Nome da Escola: <span class=" h2 small font-weight-bold"> <strong>{{ $nomeDaEscola }}</strong></span></div>
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-lg-4">
                         <div class="text-secondary">Nº da escola: <span class=" h2 small font-weight-bold"> <strong>{{ $numeroDaEscola }}</strong></span></div>
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-lg-4">

                         <div class="text-secondary">Localização: <span class=" h2 small font-weight-bold"> <strong>{{ $localizacao }}</strong></span></div>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-lg-4">

                         <div class="text-secondary">Tipo de construção: <span class=" h2 small font-weight-bold"> <strong>{{ $tipoDeConstrucao }}</strong></span></div>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-lg-4">

                         <div class="text-secondary">Forma jurídica: <span class=" h2 small font-weight-bold"> <strong>{{ $formaJuridica }}</strong> </span></div>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-lg-4">

                         <div class="text-secondary">Director da escola: <span class=" h2 small font-weight-bold"> <strong>{{ $directorDaEscola }}</strong></span></div>
                    </div>



                    <div class="form-group col-xs-12 col-sm-12 col-lg-4">

                         <div class="text-secondary">Sub-Director: <span class=" h2 small font-weight-bold"> <strong>{{ $subDirectorDaEscola }}</strong></span></div>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-lg-4">

                         <div class="text-secondary">Sub-Director pedagógivo: <span class=" h2 small font-weight-bold"> <strong>{{ $subDirectorPedagogico }}</strong></span></div>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-lg-4">
                         <div class="text-secondary">Secretário: <span class=" h2 small font-weight-bold"> <strong>{{ $secretario }}</strong></span></div>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-lg-4">

                         <div class="text-secondary">Contácto: <span class=" h2 small font-weight-bold"> <strong>{{ $contacto }}</strong></span></div>
                    </div>
                 </div>
              </div>
              <div class="modal-footer">
                    <span class="text-secondary small"> Informações da escola selecionada...!</span>
              </div>
            </div>
          </div>
        </div>

</div>
