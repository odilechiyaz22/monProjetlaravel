
            <div class="col-lg-12 col-xl-12 mg-t-20 mg-lg-t-0">
              <div class="card card-table-one">
                <h6 class="card-title">Formulaire d'enregistrement des nouveaux nées</h6>
                <p class="az-content-text mg-b-20">La liste d'informations detaillées des toutes les nouvelles naissances</p>
                <form action="{{ url('/store')}}" method="post">
                    @csrf
                    <div class="row row-sm">
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Nom de l'enfant</div>
                            <input name='nom' class="form-control" placeholder="Nom de l'enfant" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Postnom de l'enfant</div>
                            <input name='postnom' class="form-control" placeholder="Postnom de l'enfant" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Prénom de l'enfant</div>
                            <input name='prenom' class="form-control" placeholder="Prénom de l'enfant" type="text">
                        </div><!-- col -->
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-4" data-select2-id="31">
                            <div class="az-content-label mg-b-5">Genre de l'enfant</div>
                            <select name='sexe' class="form-control select2-no-search select2-hidden-accessible" data-select2-id="13" tabindex="-1" aria-hidden="true">
                                <option value="Masculin" data-select2-id="masculin">Masculin</option>
                                <option value="Féminin" data-select2-id="feminin">Féminin</option>
                            </select>
                        </div>
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Lieu de naissance</div>
                            <input name='lieu' class="form-control" placeholder="lieu de naissance" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Date de naissance</div>
                            <input name='dateN' class="form-control"  type="date">
                        </div><!-- col -->
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Prénom & Nom du père</div>
                            <input name='prenom_pere' class="form-control" placeholder="Prenom & nom du père" type="text">
                        </div><!-- col -->
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Lieu de naissance du père</div>
                            <input name='lieu_pere' class="form-control" placeholder="lieu de naissance du père" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Date de naissance du père</div>
                            <input name='date_pere' class="form-control"  type="date">
                        </div><!-- col -->
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">La profession du père</div>
                            <input name='profession_pere' class="form-control" placeholder="La profession du père" type="text">
                        </div><!-- col -->
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Le domicile du père</div>
                            <input name='domicile_pere' class="form-control" placeholder="Domicile du père" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Prénom & Nom de la mère</div>
                            <input name='prenom_mere' class="form-control" placeholder="Prenom & nom dela mère" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Lieu de naissance de la mère</div>
                            <input name='lieu_mere' class="form-control" placeholder="lieu de naissance de la mère" type="text">
                        </div><!-- col -->
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg">
                        <div class="az-content-label mg-b-5">Date de naissance de la mère</div>
                        <input name='date_mere' class="form-control"  type="date">
                        </div><!-- col -->
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Profession de la mère</div>
                            <input name='profession_mere' class="form-control" placeholder="La profession de la mère" type="text">
                        </div><!-- col -->
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Domicile de la mère</div>
                            <input name='domicile_mere' class="form-control" placeholder="Domicile de la mère" type="text">
                        </div><!-- col -->
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Tiers déclarant</div>
                            <input name='tiers_declarant' class="form-control" placeholder="Tiers declarant" type="text">
                        </div>
                        <div class="col-lg">
                            <div class="az-content-label mg-b-5">Evènements relatifs</div>
                            <textarea rows="3" name='evenements_relatifs' class="form-control" placeholder="Evènements relatifs à la naissance"></textarea>
                        </div><!-- col -->
                        <div class="col-lg">
                            <input class="btn btn-az-primary btn-block" type="submit" value='Enregistrer'>
                        </div><!-- col -->
                    </div>
                </form> 
              </div><!-- card -->
            </div><!-- col-lg -->
