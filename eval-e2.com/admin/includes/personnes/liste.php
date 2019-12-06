 <?php
                                        include("autoload.php");
                                        //creation objet personne et instanciation fonction
                                        $personne = new Personne($mysqli);
                                        $allPerson = $personne->all_personnes();
                                        print_r($allPerson);
                                        
                                        ?>
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Table with hover</h5>
                                        <table class="mb-0 table table-hover">
                                       
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>civilite</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Adresse</th>
                                                <th>complementaire</th>
                                                <th>code postale</th>
                                                <th>ville</th>
                                                <th>telephone</th>
                                                <th>login</th>
                                                <th>options</th>
                                            </tr>

                                            </thead>
                                            <tbody>
                                            <?php
                                            //pour afficher les données dans le tableau il faut : un compteur, une variable
                                            /*
                                                      compteur  $allPersonne
                                                      variable de type taleau 
                                            */
                                             //affiche nbr ligne array

                                            //echo $allPerson[0]; //affiche array
                                            //echo $allPerson[0]["id"]; //affiche 1 idpersonne
                                            //echo $allPerson[0]["nom"]; //affiche "nom" 
                                            //echo $nbrAll= mon tableu, ma derniere variable de compteur
                                            //echo ($allPerson);
                                            $nbrAll = count($allPerson);
                                              for($i=0; $i < $nbrAll; $i++)
                                              {
                                                if($i = ($nbrAll - 1))
                                                {
                                                foreach($allPerson[$i] as $value){
                                                  // print_r($value);


                                                


                                            ?>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><?php ?></td>
                                                <td><?php ?></td>
                                                <td><?php ?></td>
                                                <td><?php ?></td>
                                                <td><?php ?></td>
                                                <td><?php ?></td>
                                                <td><?php ?></td>
                                                <td><?php ?></td>
                                                <td><?php ?></td>
                                                <td><a href="#://" class="btn btn-success">modifier</a>  <a href="#://" class="btn btn-danger">supprimer</a></td>
                                            </tr>
                                            <?php
                                              }
                                            }

                                            
                                        }
                                            ?>
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Material</th>
      <th>Quantity</th>
      <th>Unit price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
      <td>25</td>
      <td>$2.90</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
      <td>50</td>
      <td>$1.25</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
      <td>10</td>
      <td>$2.35</td>
    </tr>
  </tbody>
</table>

                            