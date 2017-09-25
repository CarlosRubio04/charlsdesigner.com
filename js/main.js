var consulta = window.matchMedia('(max-width: 500px)');
consulta.addListener(mediaQuery);

var $burguerButton = document.getElementById('burguer-button');
var $close = document.getElementById('close');
var $menu = document.getElementById('menu');

function toggleMenu(){
  $menu.classList.toggle('active-menu');
};

function closeMenu(){
  $menu.classList.remove('active-menu');
};

function mediaQuery() {
  if (consulta.matches) {
          $burguerButton.addEventListener('touchstart', toggleMenu);
          $close.addEventListener('touchstart', closeMenu);
        } else {
          $burguerButton.addEventListener('click', toggleMenu);
          $close.addEventListener('click', closeMenu);
        }
      }
      mediaQuery();

// Validacion del formulario

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
