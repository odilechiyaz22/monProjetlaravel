
            <div class="col-lg-12 col-xl-12 mg-t-20 mg-lg-t-0">
              <div class="card card-table-one">
                <h6 class="card-title">Formulaire d'enregistrement des nouveaux nées</h6>
                <p class="az-content-text mg-b-20">La liste d'informations detaillées des toutes les nouvelles naissances</p>
                <form action="{{ url('/create')}}" method="post">
                    @crf
                    <div class="row row-sm">
                        <div class="col-lg">
                            <input name='nom' class="form-control" placeholder="Nom de l'enfant" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                            <input name='postnom' class="form-control" placeholder="Postnom de l'enfant" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                            <input name='prenom' class="form-control" placeholder="Prénom de l'enfant" type="text">
                        </div><!-- col -->
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-4" data-select2-id="31">
                            <p class="mg-b-10">Sexe</p>
                            <select class="form-control select2-no-search select2-hidden-accessible" data-select2-id="13" tabindex="-1" aria-hidden="true">
                                <option value="Firefox" data-select2-id="masculin">Masculin</option>
                                <option value="Chrome" data-select2-id="feminin">Féminin</option>
                            </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="14" style="width: 286.65px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-typb-container"><span class="select2-selection__rendered" id="select2-typb-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Date de naissance</div>
                            <div class="wd-250 mg-b-20">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                        </div>
                                    </div>
                                    <input type="text" value="2018-12-20 21:05" id="date" name='dateN' class="form-control">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-lg">
                            <input name='prenom_pere' class="form-control" placeholder="Prenom & nom du père" type="text">
                        </div><!-- col -->
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg">
                            <input name='lieu_pere' class="form-control" placeholder="lieu de naissance du père" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Date de naissance du père</div>
                                <div class="wd-250 mg-b-20">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                            </div>
                                        </div>
                                        <input type="text" value="2018-12-20 21:05" id="date_pere" name='date_pere' class="form-control">
                                    </div>
                                </div>
                            </div><!-- col -->
                        <div class="col-lg">
                            <input name='profession_pere' class="form-control" placeholder="La profession du père" type="text">
                        </div><!-- col -->
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg">
                            <input name='domicile_pere' class="form-control" placeholder="Domicile du père" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                            <input name='prenom_mere' class="form-control" placeholder="Prenom & nom dela mère" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                        <input name='lieu_mere' class="form-control" placeholder="lieu de naissance de la mère" type="text">
                        </div><!-- col -->
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg">
                        <div class="az-content-label mg-b-5">Date de naissance de la mère</div>
                                <div class="wd-250 mg-b-20">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                            </div>
                                        </div>
                                        <input type="text" value="2018-12-20 21:05" id="date_pere" name='date_mere' class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-lg">
                        <input name='profession_mere' class="form-control" placeholder="La profession de la mère" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                        <input name='domicile_mere' class="form-control" placeholder="Domicile de la mère" type="text">
                        </div><!-- col -->
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg">
                            <input name='tiers_declarant' class="form-control" placeholder="Tiers declarant" type="text">
                        </div>
                        <div class="col-lg">
                            <textarea rows="3" name='evenements_relatifs' class="form-control" placeholder="Textarea"></textarea>
                        </div><!-- col -->
                        <div class="col-lg">
                            <input class="btn btn-az-primary btn-block" type="submit" value='Enregistrer'>
                        </div><!-- col -->
                    </div>
                </form> 
              </div><!-- card -->
            </div><!-- col-lg -->
