
            <div class="col-lg-12 col-xl-12 mg-t-20 mg-lg-t-0">
              <div class="card card-table-one">
                <h6 class="card-title">Liste des nouveaux nées</h6>
                <p class="az-content-text mg-b-20">La liste detaillée des toutes les nouvelles naissances</p>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <td colspan='6' style='text-align:center'>Informations Sur l'Enfant</td>
                        <td colspan='5' style='text-align:center'>Informations Sur le Père</td>
                        <td colspan='5' style='text-align:center'>Informations Sur la Mère</td>
                        <td colspan='2' style='text-align:center'>Autres Informations</td>
                      </tr>
                      <tr>
                        <th>Nom</th>
                        <th>&nbsp;Postnom</th>
                        <th>&nbsp;Prénom</th>
                        <th>&nbsp;Sexe</th>
                        <th>&nbsp;Lieu</th>
                        <th>&nbsp;Date</th>
                        <th>&nbsp;&nbsp;Prénom & Nom</th>
                        <th>&nbsp;Lieu</th>
                        <th>&nbsp;Date</th>
                        <th>&nbsp;Profession</th>
                        <th>&nbsp;Domicile</th>
                        <th>&nbsp;&nbsp; Prénom & Nom</th>
                        <th>&nbsp;Lieu</th>
                        <th>&nbsp;Date</th>
                        <th>&nbsp;Profession</th>
                        <th>&nbsp;Domicile</th>
                        <th>&nbsp; Tiers Declarant</th>
                        <th>&nbsp;Evenements relatifs</th>
                        <th>&nbsp;Date fiche</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($naissances as $n)
                      <tr>
                        <td>{{$n->nom}}</td>
                        <td>&nbsp; {{$n->postnom}}</td>
                        <td>&nbsp; {{$n->prenom}}</td>
                        <td>&nbsp; {{$n->sexe}}</td>
                        <td>&nbsp; {{$n->lieu}}</td>
                        <td>&nbsp; {{$n->dateN}}</td>
                        <td>&nbsp;&nbsp; {{$n->prenom_pere}}</td>
                        <td>&nbsp; {{$n->lieu_pere}}</td>
                        <td>&nbsp; {{$n->date_pere}}</td>
                        <td>&nbsp; {{$n->profession_pere}}</td>
                        <td>&nbsp; {{$n->domicile_pere}}</td>
                        <td>&nbsp;&nbsp; {{$n->prenom_mere}}</td>
                        <td>&nbsp;{{$n->lieu_mere}}</td>
                        <td>&nbsp;{{$n->date_mere}}</td>
                        <td>&nbsp;{{$n->profession_mere}}</td>
                        <td>&nbsp;{{$n->domicile_mere}}</td>
                        <td>&nbsp;&nbsp; {{$n->tiers_declarant}}</td>
                        <td>&nbsp;{{$n->evenements_relatifs}}</td>
                        <td>&nbsp;{{$n->created_at}}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card -->
            </div><!-- col-lg -->
