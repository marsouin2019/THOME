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
    public $postal;
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
        print_r($this->connectDB); 
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
        $this->postal = ltrim(htmlentities($data["frmCp"]));
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
        $this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);


    }
   //insert data in database
    //table personne
    //table login

    //requete insert data
//$this->mysqli->query("INSERT INTO personnes (civilite,nom,prenom,adresse,complementaire,postal,ville,telephone) VALUES('". $this->civilite ."','". $this->nom ."','". $this->prenom ."','". $this->adresse ."','". $this->complementaire ."','". $this->postal ."','". $this->ville ."','". $this->telephone ."')");   
$resultat = $this->connectDB->query("INSERT INTO personnes (civilite) VALUES ('". $this->civilite ."')");
//print_r($resultat);

//REQUETE SELECT LAST ID
if($resultat == 1)
{
    $idPersonne = $this->connectDB->query("SELECT id FROM personne WHERE telephone = '".$this->telephone."' ");
    print_r($idPersonne);
    $row = $idPersonne->fetch_assoc();
    //id
    $idP = $row("id");
    
    
$resultat = $this->connectDB->query("INSERT INTO logins (email, password, idpersonne) VALUES ('".$this->email."' , '".$this->password."' , '".$idP."')");
print_r($resultat);
    





}


} 

}