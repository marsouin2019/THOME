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
  $("#frmTel").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });
  $("#frmAdresse").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
  });
  
  
  