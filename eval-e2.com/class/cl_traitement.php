<?php


// mettre en place la class Personne
class Personne
{
    // attributs
    public $civilite;
    public $nom;
    public $prenom;
    public $adresse;
    public $complementaire;
    public $postale;
    public $ville;
    public $telephone;
    public $email;
    public $password;

    public $connexion;
    // methodes
    public function __construct( $myconnexion)
    {
        //initialisation de la connexion internet
        $this->connectDB = $myconnexion;
        //print_r($this->connectDB); 
    }
    //methode avec paramettre de type tableau
    public function add_personne(array $data)
    {
        print_r($data);
        // mise en forme et securite password
        $this->civilite = $data["frmCivilite"];                                                      
        if($this->civilite != "M" || $this->civilite != "Mme")
        {
            //return false;
            echo false;
        }
        $this->prenom = ltrim(htmlentities(ucfirst($data["frmPrenom"])));
        $this->nom = ltrim(htmlentities(strtoupper($data["frmNom"])));

        $this->adresse = ltrim(htmlentities($data["frmAddress"]));
        $this->complementaire = ltrim(htmlentities($data["frmAddressb"]));
        $this->postale = ltrim(htmlentities($data["frmCp"]));
        //preg_match()
       
        if(preg_match("#A-Za-Z(5)#" , $data["frmCp"])) //pr déclarer expression régulière nouveau terme = délimiteur
        {
            //return false;
            echo false;
        }
        $this->ville = ltrim(htmlentities(ucfirst($data["frmVille"])));
        $this->telephone = ltrim(htmlentities($data["frmTel"]));
        
        $this->email = strtolower($data["frmEmail"]);

        // mise en securite du mot de passe
       
    
        if(strlen($data["frmPass"]) < 8)
        {
           // return false;
           echo false;
        }else{
            if(strlen($data["frmPass"]) > 12)
            {
                //return false;
                echo false;
            }
       //crypter mot de passe
        $this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);

    } 
    
   //insert data in database
    //table personne
    //table login

    //requete insert data
    //this->mysqli->query("INSERT INTO personnes (civilite,nom,prenom,adresse,complementaire,postale,ville,telephone) VALUES('". $this->civilite ."','". $this->nom ."','". $this->prenom ."','". $this->adresse ."','". $this->complementaire ."','". $this->postal ."','". $this->ville ."','". $this->telephone ."')");   
$resultat = $this->connectDB->query("INSERT INTO personnes (civilite,nom, prenom,adresse,complementaire,postale,ville,telephone) 
VALUES ('". $this->civilite ."','". $this->nom ."','".$this->prenom."', '".$this->adresse."', '".$this->complementaire."','".$this->postale."','".$this->ville."','".$this->telephone."')");
//print_r($resultat);


//REQUETE SELECT LAST ID
if($resultat == 1)
{
    $idPersonne = $this->connectDB->query("SELECT id,prenom FROM personnes WHERE telephone = '".$this->telephone."' ");
    print_r($idPersonne);
    $row = $idPersonne->fetch_assoc();
    //id
    $idP = $row["id"];
    $_SESSION["prenom"] = $row["prenom"];
    if(!empty($idP))
    {
        $resultat = $this->connectDB->query("INSERT INTO logins (email, password, idpersonne) VALUES ('".$this->email."' , '".$this->password."' , '".$idP."')");
        //print_r($resultat);
        //redirection vers page connexion
        header('location: http://localhost/eval-e2.com/login.php', replace);

    }else{
        echo "probleme d'insertion d'une personne";
    }
    
}


} 
public function login(array $data)
{
    //recupérer les données du form connection
    //faire une comparaison entre les données saisies et celle de notre base de donnée
    //redirection vers un espace admin
    $this->email = strtolower($data["frmEmail"]);

   //requete pour recuperer les infos login d'une personne
    $login = $this->connectDB->query("SELECT * FROM logins WHERE email = '".$this->email."' ");
   $row = $login->fetch_assoc();
    

    $idPers = $row["idpersonne"];
     $personne = $this->connectDB->query("SELECT prenom FROM personnes WHERE id = '".$idPers."' ");
     $rowP = $personne->fetch_assoc();


    if($row["email"] != "") 
    {
       //traitement du mot de passe
       echo "false";
    }else{
      //retour page form connexion
      
    }

    if(strlen($data["frmPass"]) < 8)
        {
           // return false;
           echo false;
        }else{
            if(strlen($data["frmPass"]) > 12)
            {
                //return false;
                echo false;
            }else{

            
        //$this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);

         $password= $row["password"];
                           
         if(password_verify($data["frmPass"], $password))
         {
             //stocker en session prenom et email
             $_SESSION["prenom"] = $rowP["prenom"];
             $_SESSION["email"] = $row["email"];

             //redirection vers page admin
             header('location: http://localhost/eval-e2.com/admin/index.php');


         }else{
             //redirection vers page form
         }
    }
}
}
   public function resetPassword($data)
   {

      
       $this->email = $data;
       //traitement adresse e-mail
       $resetPassword = $this->connectDB->query("SELECT * FROM logins WHERE email = '".$this->email."' ");
       //print_r($resetPassword);
       //generateur nouveau password
       //$newPassword = "azertyui";

       echo $newPassword = $this-> genePassword(0);
       //test mail
       echo $this->envoi_password($newPassword);
       exit;

       //crypter mdp
       $this->password = password_hash($newPassword, PASSWORD_DEFAULT);

       //metre à jour mot de passe dans la table login
       /*
       UPDATE
       */
      $resultat = $this->connectDB->query("UPDATE logins SET password='".$this->password."' WHERE EMAIL='".$this->email."'");
      //print_r($resultat);


   }


   public function genePassword(int $lenght)
   {
       //test longueur
       $lenght = ($lenght == 8) ? 8 : 12;

       //chaine 
       $chaine = "ABCDEFGHJKMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz123456789&#.";
       //melange
       $melanger = str_shuffle($chaine);

       //retourner
       return $passwd = substr($melanger, 0, $lenght);     //substr sert a decouper la chaine, à partir de 0 jusqu'a 8 ou 12
   }


   public function envoi_password($passwd)
   {
       $to      = 'marsouins2019@gmail.com';
       $subject = 'New Password Localhost';
       $message = 'Bonjour !, voici votre nouveau mot de passe, '.$passwd.'.'."\r\n" ;
       $headers = 'From: hostmaster@gmail.com' . "\r\n" . 'Reply-To: noreply@gmail.com' . "\r\n" . 'X-mailer: PHP/' . phpversion();

       if(mail($to , $subject, $message, $headers))
   {
       return "Le message est envoyé";
   }else{
       return "Le message n'est pas envoyé";
   }

   }
   
   public function delette_personne(int $id)      //supprimer une personne
   {
       //requete delete
       //logins il faut passer par son id
       $requete = $this->connectDB->query("DELETE FROM logins WHERE id = '".$id."' ");
      


   }
   public function all_personnes()
   {
       //afficher ttes les pers
       $requete = $this->connectDB->query("SELECT * FROM personnes");
       //$rowA = $requete->fetch_assoc();

       print_r($requete);

       //stocker tteS les ligneS de résultat dans $rowA
       //pour faire une boucle il faut un comteur une variable et un tableau
       //compteur $equete num_rows
       //tableau $rowA

       $nbr = $requete->num_rows;//afficher nombre ligne table personnes
       //boucle

       for($i=0; $i < $nbr; $i++)
       {
           //stocker le resultat boucle dans variable de type array
           $rowA[] = $requete->fetch_assoc();
       }

       return $rowA;
   }
}
