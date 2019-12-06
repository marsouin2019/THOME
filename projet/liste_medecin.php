<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="/projet/css/liste_medecin.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Libre+Caslon+Text|Lobster|Montserrat|Pacifico&display=swap" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->


    <title>Liste des mèdecins</title>
</head>
<body>
    
<?php
    include("includes/header.php")
    ?>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="form-group col-md-4">
                        <label for="inputState"><p>liste des communes</p></label>
                        <select id="inputState" class="form-control">
                          <option selected>Fort-de-France</option>
                          <option selected> Vauclin</option>
                        </select>
                      </div>
                </div>
                <div class="col-6">
                        <div class="form-group col-md-4">
                                <label for="inputState"><p>medecin dispo</p></label>
                                <select id="inputState" class="form-control">
                                  <option selected>Fort-de-France</option>
                                  <option selected> Vauclin</option>
                                </select>
                              </div>
                </div>
            </div>
           
        </div>
    </div>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <article>
                            BOUSQUET LIONEL <br>
                            Accepte la carte Vitale <br>
                            Honoraires sans dépassement <br>
                            06 96 33 60 24 <br>
                            Conventionné secteur 1 <br>
                            CABINET DU DR LIONEL BOUSQUET <br>
                            ZAC ETANG Z ABRICOT <br>
                            44 RUE ERNEST HEMINGWAY <br>
                            97200 FORT DE FRANCE <br>

                    </article>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Sélectionner ce mèdecin</label>
                    </div>
                </div>
                <div class="col-6">
                    <article>
                            PECOUT FRANCIS
                            Accepte la carte Vitale
                            Honoraires sans dépassement
                            Conventionné secteur 1
                            CENTRE DE REGULATION CENTRE 15
                            CENTRE 15 CS 90632
                            CHUM SITE ZOBDA QUITMAN
                            97261 FORT DE FRANCE CEDEX
                            
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <article>
                                BOUSQUET LIONEL
                                Accepte la carte Vitale 
                                Honoraires sans dépassement
                                06 96 33 60 24
                                Conventionné secteur 1
                                CABINET DU DR LIONEL BOUSQUET
                                ZAC ETANG Z ABRICOT
                                44 RUE ERNEST HEMINGWAY
                                97200 FORT DE FRANCE
                        </article>
                    </div>
                    <div class="col-6">
                        <article>
                                PECOUT FRANCIS
                                Accepte la carte Vitale
                                Honoraires sans dépassement
                                Conventionné secteur 1
                                CENTRE DE REGULATION CENTRE 15
                                CENTRE 15 CS 90632
                                CHUM SITE ZOBDA QUITMAN
                                97261 FORT DE FRANCE CEDEX
                                
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="col-12">    
               <a href="form.php"><p class="h4"><button type="button" class="btn btn-secondary btn-lg" id="submit">CHOISIR CE MEDECIN</button></p></a>  
            </div>
        </div>
          
          
         
        
           <?php
           include("includes/footer.php")
           ?>
</body>
</html>