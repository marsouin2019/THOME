
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/index.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Libre+Caslon+Text|Lobster|Montserrat|Pacifico&display=swap" rel="stylesheet">

    <!------ Include the above in your HEAD tag ---------->


    <title>Accueil</title>
</head>
<body>
    
<?php
    include("includes/header.php")
    ?>
       
          
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                <h1><p class="h1">Site de réservation de ticket en ligne</p></h1>  
                </div> 
            </div>
                  
        </div>
    </div>


        <div class="container">
            <div class="col-12">
                <h2><p class="h3">CLIQUER CI-DESSOUS POUR RÉSERVER VOTRE TICKET</p></h2> 
                 
            </div>
        </div>
        


        <div class="container">
            <div class="col-12">    
                    <a href="liste_medecin.php"><p class="h4"><button type="button" class="btn btn-secondary btn-lg" id="submit">OBTENIR UN TICKET</button></p></a>  
            </div>
        </div>

          
         
       <?php
       include("includes/footer.php")
       ?>
        

          
   
   
    
</body>
</html>