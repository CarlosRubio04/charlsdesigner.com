$('#contacto').validate(  {
  rules: {
    nombre: {
      required: true,
      minlength: 5
    }
  },
  messages: {
    nombre: {
      required: "Por favor escribe tu nombre",
      minlength: "Tu nombre es demasiado corto"
    }
  },
  submitHandler: function(form){
    cargar();
    $.post('includes/validation.php',$('#contacto').serialize())
    .done(function(data){
      $('.form-control').val('');
      descargar();
      //bootbox.alert(data, function() {console.log("Alert Callback");});
      window.location.href = "?content=gracias";
    })
  }
});
