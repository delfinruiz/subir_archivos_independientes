$(document).ready(function () {


$('#btn_enviar').click(function (e) {
    e.preventDefault();

      var form_data = new FormData(document.getElementById("formarchivo"));
      
      $.ajax({
        url: "includes/procesa.php",
        type: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        success: function (respuesta) {

            console.log(respuesta);

        }

      });

  });

});