<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div wire:ignore.self class="modal fade" id="maisInfoFuncionario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header bg-info">
                <h5 class="modal-title text-light" id="exampleModalLabel">
                    Mais informações sobre o/a funcionário/a
                </h5>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 <div class="row">

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Nome completo: <span class=" h2 small font-weight-bold"> <strong>{{ $nome }}</strong></span></div>
                    </div>

                    <br>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Nome do Pai: <span class=" h2 small font-weight-bold"> <strong>{{ $nomeDoPai }}</strong></span></div>
                    </div>

                    <br>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">

                         <div class="text-secondary">Nome da maê: <span class=" h2 small font-weight-bold"> <strong>{{ $nomeDaMae }}</strong></span></div>
                    </div>
                     

                                        <br>
                                        

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">

                         <div class="text-secondary">Nº do BI: <span class=" h2 small font-weight-bold"> <strong>{{ $numBi }}</strong></span></div>
                    </div>
                    
                    <br>
                    

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">

                         <div class="text-secondary">Data de emissão: <span class=" h2 small font-weight-bold"> <strong>{{ $dataEmissao }}</strong> </span></div>
                    </div>

                    
                    <br>
                    
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">

                         <div class="text-secondary">Data de nascimento: <span class=" h2 small font-weight-bold"> <strong>{{ $dataNascimento }}</strong></span></div>
                    </div>
                    
                    <br>
                    

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Idade actual: <span class=" h2 small font-weight-bold"> <strong>{{ $idade }}</strong></span></div>
                    </div>

                    
                    <br>
                    

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">

                         <div class="text-secondary">Província: <span class=" h2 small font-weight-bold"> <strong>{{ $provincia }}</strong></span></div>
                    </div>

                    
                    <br>
                    
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">

                         <div class="text-secondary">Município: <span class=" h2 small font-weight-bold"> <strong>{{ $municipio }}</strong></span></div>
                    </div>
                    
                    <br>
                    

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Gênero: <span class=" h2 small font-weight-bold"> <strong>{{ $genero }}</strong></span></div>
                    </div>

                    
                    <br>
                    
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Contácto: <span class=" h2 small font-weight-bold"> <strong>{{ $contacto }}</strong></span></div>
                    </div>
                    
                    <br>
                    

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">E-mail: <span class=" h2 small font-weight-bold"> <strong>{{ $email }}</strong></span></div>
                    </div>

                    
                    <br>
                    
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Função: <span class=" h2 small font-weight-bold"> <strong>{{ $funcao }}</strong></span></div>
                    </div>

                    
                    <br>
                    
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Grau acadêmico: <span class=" h2 small font-weight-bold"> <strong>{{ $grauAcademico }}</strong></span></div>
                    </div>
                    
                    <br>
                    

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Área de formação: <span class=" h2 small font-weight-bold"> <strong>{{ $areaFormacao }}</strong></span></div>
                    </div>

                    
                    <br>
                    
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Instituto onde se formou: <span class=" h2 small font-weight-bold"> <strong>{{ $institutoDeFormacao }}</strong></span></div>
                    </div>
                    
                    <br>
                    

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Nº de agente: <span class=" h2 small font-weight-bold"> <strong>{{ $numAgente }}</strong></span></div>
                    </div>
                    
                    <br>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Loca de trabalho: <span class=" h2 small font-weight-bold"> <strong>{{ $escola }}</strong></span></div>
                    </div>

                    <br>


                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Categoria: <span class=" h2 small font-weight-bold"> <strong>{{ $categoria }}</strong></span></div>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Vencimento líquido: <span class=" h2 small font-weight-bold"> <strong>{{ $vencimento }}</strong></span></div>
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <div class="text-secondary">Valor por extenso: <span class=" h2 small font-weight-bold"> <strong>{{ $salarioPorExtenso }}</strong></span></div>
                    </div>


                    
                 </div>
              </div>
              <div class="modal-footer">
                    <span class="text-secondary small"> Informações do funcionário...!</span>
              </div>
            </div>
          </div>
        </div>

</div>
