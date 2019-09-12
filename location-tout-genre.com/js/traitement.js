  //$("#frmRegister").validate();
  
 //verifier taille champs password

 //les elements que j'ai besoin
 /*$("#frmPass").length;
 $("frmPassb");
 $("#frmRegister");*/
 
 /*$( "#frmPass" ).blur(function() {
  //alert( "Handler for .blur() called." );
});*/
/*
if($("#frmPrenom").val().length <= 6)	
			{
				alert("non");
			}
			else{
        alert("oui");      
      }
 */ 



/*$("input[type ='text']").blur(function() {
  if ($(this).val() == ""){
      alert('champ vide');
      
  }
});*/

$("#frmPrenom").blur(function(){
  if($(this).val().length == 0)
{
  $(this).addClass("is-invalid");
}else{
  $(this).removeClass("is-invalid").addClass("is-valid");
}
});

$("#frmNom").blur(function(){
  if($(this).val().length == 0)
{
  $(this).addClass("is-invalid");
}else{
  $(this).removeClass("is-invalid").addClass("is-valid");
}
});

$("#frmPass").blur(function(){
  if($(this).val().length == 0)
{
  $(this).addClass("is-invalid");
}else{
  //teste si chaine plus petite que 6 caractères
  if($(this).val().length < 6)
  {
    $(this).addClass("is-invalid");
  }else{
  //teste si chaine est pluus petite que 12 caractères
  if($(this).val().length > 12)
  {
    $(this).addClass("is-invalid");
  } else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  }
 // $(this).removeClass("is-invalid").addClass("is-valid");
}
});

$("#frmPassb").blur(function(){
  if($(this).val().length == 0)
  {
   $(this).addClass("is-invalid");
  }else {
    //test valeur du mot de passe
    if($(this).val() != $("#frmPass").val())
    {
      $(this).addClass("is-invalid");
    }else{
      $(this).removeClass("is-invalid").addClass("is-valid");
    }
  }
});
/*
$("input[type ='password']").blur(function() {
  if ($(this).val() < 6 ){
      alert('Le champ doit contenir au moins 6 caractères');
  }
});
$("input[type ='password']").blur(function() {
  if ($(this).val() > 12 ){
      alert('Le champ ne doit pas contenir plus de 12 caractères');
  }
});
*/
/*$( "input[type!='password']").blur(function() {
  if ( $(this).val() < 6 ){
      alert('champ imcomplet');
  }
  else{
      alert('champ complet');
  }
});

*/








/*

$().ready(function() {
  
  // validate signup form on keyup and submit
  $("#frmRegister").validate({
    rules: {
      frmPass: {
        required: true,
        minlength: 6,
        
      },
      frmPassb: {
        required: true,
        minlength: 6,
        equalTo: "#frmPass"
      },
    
    messages: {
     
      frmPass: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long"
      },
      frmPassb: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long",
        equalTo: "Please enter the same password as above"
      }
    }
    }


    });
  });
  
*/