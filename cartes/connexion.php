<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="js/connexion.js">
    <link rel="stylesheet" media="only screen and (min-width : 375px) and (orientation : portrait)" href="connexion.css">
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   
  </head>
  <body>

   
   
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
    <title>Document</title>
</head>
<body>


    <img src="https://media.discordapp.net/attachments/628973422399062017/648929740530647041/Mes_cartes.png" alt="" class="logo">
   

   


    <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Adresse mail</label>
              <input type="email" class="form-control" id="frmEmail" aria-describedby="emailHelp" placeholder="Indiquer email" style="width: 600px; height:50px"required>
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mot de passe</label>
              <input type="password" class="form-control" id="frmPassword" placeholder="Indiquer mot de passe" style="width: 600px; height:50px"required>
            </div>
            <button type="button" class="btn btn-lg btn-block" style="width: 600px; height:50px ;"> <div class="coul"> CONTINUER</div></button>
   
    </form>

     <!-- Button trigger modal -->
 <div class="container">
  <p class="info"><a href="#" data-target="#exampleModalCenter" data-toggle="modal">Forgot my password</a></p>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLongTitle">What's My Password?</h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <p>If you have forgotten your password you can reset it here.</p>
              <div class="panel-body">
                <form action="traitement.php" method="post" name="frmPass" id="frmPass">
                  <fieldset>
                      <div class="form-group">
                          <input class="form-control input-lg" placeholder="E-mail Address" name="frmEmail" type="email" required>
                      </div>
                      <button type="submit" class="btn btn-lg btn-primary btn-block" name="frmForm" value="frmPass">Send My Password</button>
                  </fieldset>
                </form>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>

<!-- Modal -->


          

            <div class="button">
           

              
           
            <div class="hh2">
           
            <h2>OU</h2>

            </div>
               <div class="hh1"> 

            <h1>SE CONNECTER AVEC </h1>
           
              </div>
           
         
          </div>


           

            <button type="button" class=" btn-lg; facebook"> <img src="https://img.icons8.com/color/48/000000/facebook.png" style=" height: 100px;"></button>
           
            <?php
   session_start(); 
?>
<html xmlns:fb = "http://www.facebook.com/2008/fbml">
   
   <head>
      <title>Login with Facebook</title>
      <link 
         href = "http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" 
         rel = "stylesheet">
   </head>
   
   <body>
      <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
         
         <div class = "container">
            
            <div class = "hero-unit">
               <h1>Hello <?php echo $_SESSION['USERNAME']; ?></h1>
               <p>Welcome to "facebook login" tutorial</p>
            </div>
            
            <div class = "span4">
				
               <ul class = "nav nav-list">
                  <li class = "nav-header">Image</li>
						
                  <li><img src = "https://graph.facebook.com/<?php 
                     echo $_SESSION['FBID']; ?>/picture"></li>
                  
                  <li class = "nav-header">Facebook ID</li>
                  <li><?php echo  $_SESSION['FBID']; ?></li>
               
                  <li class = "nav-header">Facebook fullname</li>
						
                  <li><?php echo $_SESSION['FULLNAME']; ?></li>
               
                  <li class = "nav-header">Facebook Email</li>
						
                  <li><?php echo $_SESSION['EMAIL']; ?></li>
               
                  <div><a href="logout.php">Logout</a></div>
						
               </ul>
					
            </div>
         </div>
         
         <?php else: ?>     <!-- Before login --> 
         
         <div class = "container">
            <h1>Login with Facebook</h1>
            Not Connected
            
            <div>
               <a href = "fbconfig.php">Login with Facebook</a>
            </div>
            
            <div>
               <a href = "http://www.tutorialspoint.com"  
                  title = "Login with facebook">More information about Tutorialspoint</a>
            </div>
         </div>
         
      <?php endif ?>
      
   </body>
</html>
           
            <button type="button" class=" btn-lg; google"  > <img src="https://img.icons8.com/color/48/000000/google-logo.png" style=" height: 100px;"></button>


           

            <button type="button" class=" couleurD btn-lg; connexion" style="width: 250px;"> <div class="coulD"> Première connexion</button> </div>
           



           
         <script src="js/connexion.js"></script>
</body>
</html>
