var marsouin=["Verroux","Renay","Vitulin","Terrine","Robinel","Maximin","Marie-Luce","RenardVatton","Ney","Thome"];
console.log(marsouin);
console.log(marsouin [4]);
console.log(marsouin. length);
var copie=[];
var nbr=marsouin.length;
for(var i=0;i<nbr;i++){
 copie.push(marsouin[i]);
 console.log(copie);
}
var last=marsouin[marsouin.length -1];
document.write(last);
marsouin.forEach(function(item,index,array) {console.log(item,index)});
   var addnewmarsouin=marsouin.push("POPOTTE");
   document.write(marsouin);
    
var deletelastmarsouin=marsouin.pop();
document.write(marsouin);
var deletefirstmarsouin=marsouin.shift();
document.write(marsouin);

var question = prompt("Est-ce que Mr Renard Vatton a compris le Cours");

if ( question  != null){
    document.getElementById("reponse").innerHTML = question;
}
var question = prompt("Suis-je normal");
if (question != null){
document.getElementById("reponse").innerHTML = question;
}


var genre = prompt ("Êtes-vous un homme ou une femme");
if ( genre  != null){
    //document.getElementById("reponse").innerHTML = genre;
    alert(genre);
}  else {
    alert ("vous n'avez pas répondu")
}
