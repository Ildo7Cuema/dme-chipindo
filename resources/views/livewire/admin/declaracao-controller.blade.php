<div>
    {{-- Be like water. --}}
    <x-slot name="header">
        <h1 class="h5 font-weight-bold">
            {{ __('Secretaria Geral - Declarações & Outros documentos') }}
        </h1>
    </x-slot>

    <div class="card">
        <div class="card-header bg-success">
            
        </div>

        <div class="card-body">
            <div class="row text-center">

                <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <label class="font-weight-bold"><strong>Declaração de serviço e outras</strong></label>
                    <h1>
                        <a href="{{ route('dsEo') }}">
                            <i class="fa fa-book text-primary"></i>
                        </a>
                    </h1>
                </div>


                <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <label class="font-weight-bold"><strong>Declarações de bancos</strong></label>
                    <h1>
                        <a href="#">
                            <i class="fa fa-book text-primary"></i>
                        </a>
                    </h1>
                </div>



                <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <label class="font-weight-bold"><strong>Documentos internos</strong></label>
                    <h1>
                        <a href="#">
                            <i class="fa fa-book text-primary"></i>
                        </a>
                    </h1>
                </div>


            </div>
        </div>


        <div class="card-footer">
            <span class="text-secondary small d-flex justify-content-end"><i class="fa fa-book text-success mt-2 mr-2"></i> Emita documentos</span>
        </div>
    </div>
</div>
