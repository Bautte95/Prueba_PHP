// registro de datos y validacion de formulario

const nombre = document.getElementById("nombre");
const apellido = document.getElementById("apellido");
const alertaError = document.getElementById("mensaje__error");

$("#enviar__datos").click(function(){

    var datos = $('#envio__formulario').serialize();

        if(nombre.value === null || nombre.value == ''){
            alertaError.innerHTML = "Por favor ingresa tu nombre";
        }
        else if(apellido.value === null || apellido.value == ""){
            alertaError.innerHTML = "Por favor ingresa tu apellido";
        }else{
            nombre.value = "";
            apellido.value = "";

            $.ajax({
                url: 'envio_datos.php',
                type: 'POST',
                data: datos,
                success: function(e){
                    if(e == 1){
                        swal("Felicidades","Datos enviados con éxito!", "success");
                        alertaError.innerHTML = "";
                    }else{
                        swal({
                            title: "Ups hubo un error!",
                            text: "Intenta nuevamente",
                            icon: "error",
                            dangerMode: true,
                        })
                    }
                }
            });
        }
});

// consulta de datos

const boton_consulta = document.getElementById("boton__consultar");

boton_consulta.addEventListener("click", ()=>{

    $.ajax({
        url: 'consulta_datos.php',
        type: 'POST',

        success: function(resultado)
        {
          $('#mostrar__datos').html(resultado);
        }
      });
});

// modificación de datos y validacion de formulario

const id = document.getElementById("id");
const nombre_nuevo = document.getElementById("nombre_mod");
const apellido_nuevo = document.getElementById("apellido_mod");
const alertaError_mod = document.getElementById("mensaje__error__mod");

$("#boton__modificar").click(function(){

    var datos = $('#modificar__datos').serialize();

        if(id.value === null || id.value == ''){
            alertaError_mod.innerHTML = "Por favor ingresa el id";
        }
        else if(nombre_nuevo.value === null || nombre_nuevo.value == ""){
            alertaError_mod.innerHTML = "Por favor ingresa un nombre";
        }
        else if(apellido_nuevo.value === null || apellido_nuevo.value == ""){
            alertaError_mod.innerHTML = "Por favor ingresa un apellido";
        }else{

            id.value = "";
            nombre_nuevo.value = "";
            apellido_nuevo.value = "";

            $.ajax({
                url: 'modificar_datos.php',
                type: 'POST',
                data: datos,
                success: function(e){
                    console.log(e);
                    if(e == 1){
                        swal("Datos modificados con éxito!","Consulta nuevamente", "success");
                        alertaError_mod.innerHTML = "";
                    }else{
                        swal({
                            title: "Ups hubo un error!",
                            text: "Intenta nuevamente",
                            icon: "error",
                            dangerMode: true,
                        })
                    }
                }
            });
        }
});