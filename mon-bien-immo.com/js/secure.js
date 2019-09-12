$("#frmPrenom").blur(function(){
    if($(this).val().value != "martine")
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });


  $("#frmNom").blur(function(){
    if($(this).val().value !="ambrosio")
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });

  $("#frmEmail").blur(function(){
    if($(this).val().value != "martine.ambrosio@gmail.com")
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });


  $("#frmPass").blur(function(){
    if($(this).val().length != "ssssssss")
  {
    $(this).addClass("is-invalid");
  }else{
    
    if($(this).val().length < 8)
    {
      $(this).addClass("is-invalid");
    }else{
    
    if($(this).val().length > 20)
    {
      $(this).addClass("is-invalid");
    } else{
      $(this).removeClass("is-invalid").addClass("is-valid");
    }
}
  
  }
  });

