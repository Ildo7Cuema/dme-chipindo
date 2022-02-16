<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div wire:ignore.self class="modal fade" id="modal-form-funcionario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header bg-success">
                <h5 class="modal-title text-light" id="exampleModalLabel">
                    @if ($action=='store')
                        {{-- true expr --}}
                        Cadastrar novo funcionário
                    @else
                        {{-- false expr --}}
                        Alterar dados do funcionário
                    @endif
                </h5>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 <div class="row">

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Nome completo</label>
                      <input type="text" class="form-control form-control-sm @error('nome') is-invalid @enderror" name="nome" wire:model.defer='dados.nome'>
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Nome do pai</label>
                      <input type="text" class="form-control form-control-sm @error('nomeDoPai') is-invalid @enderror" name="nomeDoPai" wire:model.defer='dados.nomeDoPai'>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Nome da maê</label>
                      <input type="text" class="form-control form-control-sm @error('nomeDaMae') is-invalid @enderror" name="nomeDaMae" wire:model.defer='dados.nomeDaMae'>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Nº do BI</label>
                      <input type="text" class="form-control form-control-sm @error('numBi') is-invalid @enderror" name="numBi" wire:model.defer='dados.numBi'>
                      @error('numBi') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Data de emissão</label>
                      <input type="date" class="form-control form-control-sm @error('dataEmissao') is-invalid @enderror" name="dataEmissao" wire:model.defer='dados.dataEmissao'>
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Data de nascimento</label>
                      <input type="date" class="form-control form-control-sm @error('dataNascimento') is-invalid @enderror" name="dataNascimento" wire:model='dados.dataNascimento'>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Província</label>

                      <select class="form-control form-control-sm @error('provincia') is-invalid @enderror provincia" name="provincia" wire:model.defer="dados.provincia">
                            <option value="">...</option>
                            <option>Bengo</option>
                            <option>Benguela</option>
                            <option>Bié</option>
                            <option>Cabinda</option>
                            <option>Cunene</option>
                            <option>Huambo</option>
                            <option>Huíla</option>
                            <option>Kuando Kubango</option>
                            <option>Kwanza Norte</option>
                            <option>Kwanza Sul</option>
                            <option>Luanda</option>
                            <option>Lunda Norte</option>
                            <option>Lunda Sul</option>
                            <option>Malange</option>
                            <option>Moxico</option>
                            <option>Namibe</option>
                            <option>Uíge</option>
                            <option>Zaire</option>
                        </select>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Município</label>
                      <select class="form-control form-control-sm @error('municipio') is-invalid @enderror" name="municipio" id="municipio" wire:model.defer="dados.municipio">
                      </select>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Gênero</label>
                      <select class="form-control form-control-sm @error('genero') is-invalid @enderror" name="genero" wire:model.defer='dados.genero'>
                        <option>...</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                      </select>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Contácto</label>
                      <input type="text" class="form-control form-control-sm @error('contacto') is-invalid @enderror" name="contacto" wire:model.defer='dados.contacto'>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">E-mail</label>
                      <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" wire:model.defer='dados.email'>
                      @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>



                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Função</label>
                      <input type="text" class="form-control form-control-sm @error('funcao') is-invalid @enderror" name="funcao" wire:model.defer='dados.funcao'>
                    </div>



                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Grau acadêmico</label>
                      <input type="text" class="form-control form-control-sm @error('grauAcademico') is-invalid @enderror" name="grauAcademico" wire:model.defer='dados.grauAcademico'>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Área de formação</label>
                      <input type="text" class="form-control form-control-sm @error('areaFormacao') is-invalid @enderror" name="areaFormacao" wire:model.defer='dados.areaFormacao'>
                    </div>

                    
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Instituto de formação</label>
                      <input type="text" class="form-control form-control-sm @error('institutoDeFormacao') is-invalid @enderror" name="institutoDeFormacao" wire:model.defer='dados.institutoDeFormacao'>
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Nº de agente</label>
                      <input type="text" class="form-control form-control-sm @error('numAgente') is-invalid @enderror" name="numAgente" wire:model.defer='dados.numAgente'>
                      @error('numAgente') 
                          <span class="text-danger small">{{ $message }}</span> 
                      @enderror
                      
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Data de início de funções</label>
                      <input type="date" class="form-control form-control-sm @error('inicioFuncoes') is-invalid @enderror" name="inicioFuncoes" wire:model.defer='dados.inicioFuncoes'>
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Categoria que pertence</label>
                      <select class="form-control form-control-sm categ @error('categoria_id') is-invalid @enderror" name="categoria_id" wire:model.defer='dados.categoria_id'>
                        @if ($categoria)
                          {{-- true expr --}}
                          <option>...</option>
                            <option value="{{ $categoriaID }}">{{ $categoria }}</option>
                            
                            @forelse ($categorias as $categoria)
                              {{-- expr --}}
                              <option value="{{ $categoria->id }}">{{ $categoria->nomeCategoria }}</option>
                            @empty
                              {{-- empty expr --}}
                              <option>Nenhuma categoria cadastrada</option>
                            @endforelse
                        @else
                          {{-- false expr --}}
                          <option>...</option>
                          @forelse ($categorias as $categoria)
                            {{-- expr --}}
                            <option value="{{ $categoria->id }}">{{ $categoria->nomeCategoria }}</option>
                          @empty
                            {{-- empty expr --}}
                            <option>Nenhuma categoria cadastrada</option>
                          @endforelse
                        @endif
                                                
                      </select>

                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <label class="font-weight-bold">Escola / Entidade que pertence</label>
                      <select class="form-control form-control-sm @error('escola_id') is-invalid @enderror" name="escola_id" wire:model.defer='dados.escola_id'>
                        @if ($escolaID)
                            {{-- true expr --}}
                            <option>...</option>
                            <option value="{{ $escolaID }}">{{ $escola }}</option>
                            
                            @forelse ($escolas as $escola)
                              {{-- expr --}}
                              <option value="{{ $escola->id }}">{{ $escola->nomeEscola }}</option>
                            @empty
                              {{-- empty expr --}}
                              <option>Nenhuma escola cadastrada</option>
                            @endforelse
                        @else
                          {{-- false expr --}}
                          <option>...</option>
                          @forelse ($escolas as $escola)
                            {{-- expr --}}
                            <option value="{{ $escola->id }}">{{ $escola->nomeEscola }}</option>
                          @empty
                            {{-- empty expr --}}
                            <option>Nenhuma escola cadastrada</option>
                          @endforelse

                        @endif
                        
                      </select>


                    </div>



                 </div>
              </div>
              <div class="modal-footer">
                    @if ($action=='store')
                        <button type="button" class="btn btn-block btn-sm btn-primary text-light" wire:click="submitFuncionario()" aria-label="Close"><i class="fa fa-save"></i> Salvar</button>
                    @else
                        <button type="button" class="btn btn-block btn-sm btn-primary text-light" wire:click="submitAlterar" aria-label="Close"><i class="fa fa-save"></i> Salvar alteração</button>
                    @endif
                  
              </div>
            </div>
          </div>
        </div>


</div>

@push('scripts')

  <script>

     window.addEventListener('closeModalFormFuncionario', event=>{
        $('#modal-form-funcionario').modal('hide');
     })

      document.addEventListener('livewire:load', function () {

                    $('select[name="provincia"]').on('change', function(){
                        var prov = $(this).val();

                        if (prov==='Bengo') {

                            $('select[name="municipio"]').html([

                                '<option>Ambriz</option>'+
                                '<option>Dande</option>'+
                                '<option>Dembos</option>'+
                                '<option>Bula Atumba</option>'+
                                '<option>Nambuangongo</option>'+
                                '<option>Pango Aluquém (Pango Aluquêm)</option>'
                                
                                ]);

                        } else if(prov==='Benguela') {

                            $('select[name="municipio"]').html([
                                '<option>Balombo</option>'+
                                '<option>Baía Farta</option>'+
                                '<option>Benguela</option>'+
                                '<option>Bocoio</option>'+
                                '<option>Caimbambo</option>'+
                                '<option>Catumbela</option>'+
                                '<option>Chongoroi</option>'+
                                '<option>Cubal</option>'+
                                '<option>Ganda</option>'+
                                '<option>Lobito</option>'


                                ]);

                        } else if(prov==='Bié'){

                            $('select[name="municipio"]').html([
                                '<option>Andulo</option>'+
                                '<option>Camacupa</option>'+
                                '<option>Catabola</option>'+
                                '<option>Chinguar</option>'+
                                '<option>Chitembo</option>'+
                                '<option>Cuemba</option>'+
                                '<option>Cunhinga</option>'+
                                '<option>Cuito (Kuito)</option>'+
                                '<option>Nharêa</option>'

                                ])

                        }else if(prov==='Cabinda'){
                            $('select[name="municipio"]').html([

                                '<option>Belize</option>'+
                                '<option>Buco-Zau</option>'+
                                '<option>Cabinda</option>'+
                                '<option>Cacongo</option>'

                                ])
                        }else if(prov==='Cunene'){

                            $('select[name="municipio"]').html([
                                '<option>Cahama</option>'+
                                '<option>Cuanhama (Kwanhama)</option>'+
                                '<option>Curoca</option>'+
                                '<option>Cuvelai</option>'+
                                '<option>Namacunde</option>'+
                                '<option>Ombadja</option>'

                                ])

                        }else if(prov==='Huambo'){

                            $('select[name="municipio"]').html([
                                '<option>Bailundo</option>'+
                                '<option>Cachiungo (Catchiungo)</option>'+
                                '<option>Caála</option>'+
                                '<option>Ecunha (Ekunha)</option>'+
                                '<option>Huambo</option>'+
                                '<option>Londuimbali</option>'+
                                '<option>Longonjo (Longongo)</option>'+
                                '<option>Mungo</option>'+
                                '<option>Chicala-Cholohanga (Tchicala-Tcholoanga)</option>'+
                                '<option>Chinjenje (Tchindjenje)</option>'+
                                '<option>Ucuma</option>'

                                ])

                        }else if(prov==='Huíla'){

                            $('select[name="municipio"]').html([
                                '<option>Caconda</option>'+
                                '<option>Cacula</option>'+
                                '<option>Caluquembe</option>'+
                                '<option>Gambos</option>'+
                                '<option>Chibia</option>'+
                                '<option>Chicomba</option>'+
                                '<option>Chipindo</option>'+
                                '<option>Humpata</option>'+
                                '<option>Jamba</option>'+
                                '<option>Cuvango (Kuvango)</option>'+
                                '<option>Lubango</option>'+
                                '<option>Matala</option>'+
                                '<option>Quilengues</option>'+
                                '<option>Quipungo</option>'

                                ])

                        }else if(prov==='Kuando Kubango'){

                            $('select[name="municipio"]').html([
                                '<option>Calai</option>'+
                                '<option>Cuangar</option>'+
                                '<option>Cuchi</option>'+
                                '<option>Cuito Cuanavale (Kuito Kuanavale)</option>'+
                                '<option>Dirico</option>'+
                                '<option>Nancova (Nankova)</option>'+
                                '<option>Mavinga</option>'+
                                '<option>Menongue</option>'+
                                '<option>Rivungo</option>'

                                ])

                        }else if(prov==='Kwanza Norte'){

                            $('select[name="municipio"]').html([
                                '<option>Ambaca</option>'+
                                '<option>Banga</option>'+
                                '<option>Bolongongo</option>'+
                                '<option>Cambambe</option>'+
                                '<option>Cazengo</option>'+
                                '<option>Golungo Alto</option>'+
                                '<option>Ngonguembo (Gonguembo)</option>'+
                                '<option>Lucala</option>'+
                                '<option>Quiculungo</option>'+
                                '<option>Samba Caju</option>'

                                ])

                        }else if(prov==='Kwanza Sul'){

                            $('select[name="municipio"]').html([
                                '<option>Amboim</option>'+
                                '<option>Cassongue</option>'+
                                '<option>Conda</option>'+
                                '<option>Ebo</option>'+
                                '<option>Libolo</option>'+
                                '<option>Mussende</option>'+
                                '<option>Porto Amboim</option>'+
                                '<option>Quibala</option>'+
                                '<option>Quilenda</option>'+
                                '<option>Seles</option>'+
                                '<option>Sumbe</option>'+
                                '<option>Cela</option>'

                                ])

                        }else if(prov==='Luanda'){

                            $('select[name="municipio"]').html([

                                '<option>Belas</option>'+
                                '<option>Cacuaco</option>'+
                                '<option>Cazenga</option>'+
                                '<option>Icolo e Bengo</option>'+
                                '<option>Luanda</option>'+
                                '<option>Quiçama (Quissama)</option>'+
                                '<option>Kilamba Kiaxi</option>'+
                                '<option>Talatona</option>'+
                                '<option>Viana</option>'

                                ])

                        }else if(prov==='Lunda Norte'){

                            $('select[name="municipio"]').html([

                                '<option>Cambulo</option>'+
                                '<option>Capenda Camulemba</option>'+
                                '<option>Caungula</option>'+
                                '<option>Chitato (Tchitato)</option>'+
                                '<option>Cuango</option>'+
                                '<option>Cuilo</option>'+
                                '<option>Lubalo</option>'+
                                '<option>Lucapa</option>'+
                                '<option>Xá Muteba</option>'+
                                '<option>Lóvua</option>'

                                ])

                        }else if(prov==='Lunda Sul'){

                            $('select[name="municipio"]').html([

                                '<option>Cacolo</option>'+
                                '<option>Dala</option>'+
                                '<option>Muconda</option>'+
                                '<option>Saurimo</option>'

                                ])

                        }else if(prov==='Malange'){

                            $('select[name="municipio"]').html([

                                '<option>Cacuso</option>'+
                                '<option>Calandula</option>'+
                                '<option>Cambundi Catembo</option>'+
                                '<option>Cangandala</option>'+
                                '<option>Cahombo (Caombo)</option>'+
                                '<option>Kiwaba Nzoji (Cuaba Nzogo)</option>'+
                                '<option>Kunda dya Baze (Cunda-Diaza)</option>'+
                                '<option>Luquembo</option>'+
                                '<option>Malange</option>'+
                                '<option>Marimba</option>'+
                                '<option>Massango</option>'+
                                '<option>Mucari</option>'+
                                '<option>Quela</option>'+
                                '<option>Quirima</option>'

                                ])

                        }else if(prov==='Moxico'){

                            $('select[name="municipio"]').html([

                                '<option>Alto Zambeze</option>'+
                                '<option>Bundas</option>'+
                                '<option>Camanongue</option>'+
                                '<option>Cameia (Lumeji)</option>'+
                                '<option>Luau</option>'+
                                '<option>Luacano (Lucano)</option>'+
                                '<option>Luchazes</option>'+
                                '<option>Léua</option>'+
                                '<option>Moxico</option>'

                                ])

                        }else if(prov==='Namibe'){

                            $('select[name="municipio"]').html([

                                '<option>Bibala</option>'+
                                '<option>Camacuio (Camulo)</option>'+
                                '<option>Moçâmedes (Namibe)</option>'+
                                '<option>Tômbwa (Tômbua)</option>'+
                                '<option>Virei</option>'

                                ])
                        }else if(prov==='Uíge'){
                            $('select[name="municipio"]').html([
                                '<option>Alto Cauale</option>'+
                                '<option>Ambuíla</option>'+
                                '<option>Bembe</option>'+
                                '<option>Buengas</option>'+
                                '<option>Bungo</option>'+
                                '<option>Damba</option>'+
                                '<option>Milunga</option>'+
                                '<option>Mucaba</option>'+
                                '<option>Negage</option>'+
                                '<option>Puri</option>'+
                                '<option>Quimbele</option>'+
                                '<option>Dange-Quitexe</option>'+
                                '<option>Pombo</option>'+
                                '<option>Songo</option>'+
                                '<option>Uíge</option>'+
                                '<option>Maquela do Zombo</option>'

                                ])
                        }else if(prov==='Zaire'){
                            $('select[name="municipio"]').html([
                                "<option>Cuimba</option>"+
                                "<option>M'Banza Kongo</option>"+
                                "<option>Noqui</option>"+
                                "<option>N'Zeto</option>"+
                                "<option>Soyo</option>"+
                                "<option>Tomboco</option>"

                                ])
                        }else {
                            $('select[name="municipio"]').html([
                               '<option>Sem província selecionada</option>'
                                ])
                        }
                    })

                })


  </script>

@endpush

