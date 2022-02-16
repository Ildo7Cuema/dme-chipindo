<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="modal-form-escola" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
              @if ($action=='store')
                  {{-- expr --}}
                  Cadastrar nova escola...!
              @endif

              @if ($action=='edit')
                  {{-- expr --}}
                  Alterar informações da escola...!
              @endif              

                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Nome da escola Ou Entidade</label>
                        <input type="text" class="form-control form-control-sm @error('nomeEscola') is-invalid @enderror" name="nomeEscola" wire:model.defer="dados.nomeEscola">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Nº da escola</label>
                        <input type="text" class="form-control form-control-sm @error('numEscola') is-invalid @enderror" name="numEscola" wire:model.defer="dados.numEscola">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Nº de contribuinte fiscal</label>
                        <input type="text" class="form-control form-control-sm @error('num_contribuinte_fiscal') is-invalid @enderror" name="num_contribuinte_fiscal" wire:model.defer="dados.num_contribuinte_fiscal">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Província</label>
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
                        <label class="text-secondary">Município</label>
                        <select class="form-control form-control-sm @error('municipio') is-invalid @enderror" name="municipio" id="municipio" wire:model.defer="dados.municipio">
                            
                        </select>
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Localização</label>
                        <input type="text" class="form-control form-control-sm @error('localizacao') is-invalid @enderror" name="localizacao" wire:model.defer="dados.localizacao">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Nº da Zip a que pertence</label>
                        <input type="text" class="form-control form-control-sm @error('zip') is-invalid @enderror" name="zip" wire:model.defer="dados.zip">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Tipo de construção</label>
                        <select class="form-control form-control-sm @error('tipoConstrucao') is-invalid @enderror" name="tipoConstrucao" wire:model.defer="dados.tipoConstrucao">
                            <option>...</option>
                            <option value="Definitiva">Definitiva</option>
                            <option value="Tradicional / Precária">Precária</option>

                        </select>
                        
                    </div>
                    
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Forma jurídica</label>
                        <select class="form-control form-control-sm @error('formaJuridica') is-invalid @enderror" name="formaJuridica" wire:model.defer="dados.formaJuridica">
                            <option>...</option>
                            <option value="Estatal">Estatal</option>
                            <option value="Privado">Privado</option>

                        </select>
                        
                
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Nome do Director</label>
                        <input type="text" class="form-control form-control-sm @error('directorDaEscola') is-invalid @enderror" name="directorDaEscola" wire:model.defer="dados.directorDaEscola">
                        
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Nome do Sub-director</label>
                        <input type="text" class="form-control form-control-sm @error('subDirector') is-invalid @enderror" name="subDirector" wire:model.defer="dados.subDirector">
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Nome do Sub-director pedagógico</label>
                        <input type="text" class="form-control form-control-sm @error('subDirectorPedagogico') is-invalid @enderror" name="subDirectorPedagogico" wire:model.defer="dados.subDirectorPedagogico">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Secretário</label>
                        <input type="text" class="form-control form-control-sm @error('secretario') is-invalid @enderror" name="secretario" wire:model.defer="dados.secretario">
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">Contácto</label>
                        <input type="text" class="form-control form-control-sm @error('contacto') is-invalid @enderror" name="contacto" wire:model.defer="dados.contacto">
                    </div>


                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label class="text-secondary">E-mail</label>
                        <input type="ameil" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" wire:model.defer="dados.email">
                    </div>

                </div>

              </div>
              <div class="modal-footer">
                @if ($action=='store')
                    {{-- true expr --}}
                    <button type="button" class="btn btn-outline-secondary btn-sm" wire:click="submit" aria-label="Close"><i class="fa fa-save text-success"></i> Salvar</button>
                @else
                    {{-- false expr --}}
                    <button type="button" class="btn btn-outline-secondary btn-sm" wire:click="submitAlterar" aria-label="Close"><i class="fa fa-save text-success"></i> Salvar alteração</button>
                @endif
              </div>
            </div>
          </div>
        </div>


</div>

@push('scripts')

        <script>

                window.addEventListener('closeModal', event => {
                    $('#modal-form-escola').modal('hide');
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








