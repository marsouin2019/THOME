<?php
//traitement du formulaire register
//print_r($_POST);

//var_dump($_POST["frmPrenom"]);

foreach($_POST as $key => $value)

{
   //echo $key. "valeur". strip_tags($value). "<br />"; &
    if(strlen(htmlentities(strip_tags($value))) < 50)
    {
        echo "la chaine correspondant a $key , n'est pas valide <br />" ;
    }else{
        echo "champ $key correspond à $value <br />";
    }
}


?>