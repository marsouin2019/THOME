

$("#frmEmail").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });
  $("#frmPassword").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });




  
/*vérifier champ mdp  / les 2 mdp doivent être les mêmes




*/
/*
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
  /*crypté le mot de passe
  
  
  
  */



  