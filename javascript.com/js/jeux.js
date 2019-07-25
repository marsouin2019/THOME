//déclaration tableau et initialisation à vide
var joueur=[];

//déclaration de ma fonction add joueur 
function add_joueur(){
    //afficher et stocker les joueurs
    joueur.push (prompt("écrire un nom de joueur en majuscule"))
    //tester variable joueur

    if (joueur !=null){
        alert(joueur.length)
    document.getElementById("affiche_joueur").innerHTML= joueur;
    }
    else{
        alert("vous n'avez pas indiqué de nom de joueur")
    }
}
//declaration de la fonction tirage au sort
function tirageausort(){
    if (joueur.length > 0 ){
        

//declaration d'une variable
//méthode mathématique pour mélanger les données
        //tirage au sort d'une donnée
        //indication de la longueur de mon tableau joueur

    var rand = Math.floor(Math.random()*joueur.length);
    


    
    }
    }