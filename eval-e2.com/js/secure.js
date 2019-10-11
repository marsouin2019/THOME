$("#frmPrenom").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });
  $("#inputState").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });
  $("#frmAddress").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });  
  $("#frmAddressb").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });  
  $("#frmCp").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });
  
  $("#frmVille").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });
  $("#frmTel").blur(function(){
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
  
  $("#frmEmail").blur(function(){
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
    if($(this).val().length < 8)
    {
      $(this).addClass("is-invalid");
    }else{
    //teste si chaine est pluus petite que 12 caractères
    if($(this).val().length > 20)
    {
      $(this).addClass("is-invalid");
    } else{
      $(this).removeClass("is-invalid").addClass("is-valid");
    }
    }
   // $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });
  
 
  