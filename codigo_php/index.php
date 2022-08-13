<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form autocomplete="off" id="envio__formulario" method="POST">
            <h2>Registrar Datos</h2>
            <label for="nombre">Ingresa tu nombre:
                <input type="text" id="nombre" placeholder="Nombre" name="nombre">
            </label>
            <label for="apellido">Ingresa tu apellido:
                <input type="text" id="apellido" placeholder="Apellido" name="apellido">
            </label>
            <button id="enviar__datos" type="button" name ="boton__enviar">Enviar</button>
            <div id="mensaje__error"></div>
        </form>
    </div>
    <br>
    <br>
    <div>
        <button id="boton__consultar" >Consultar Datos</button>
    </div>
    <br>
    <br>
    <div id="mostrar__datos"></div>
    <div>
        <form autocomplete="off" id="modificar__datos" method="POST">
        <h2>Modificar Datos</h2>
            <label for="id">Ingresa id:
                <input type="text" id="id" placeholder="id" name="id">
            </label>
            <label for="nombre_mod">Ingresa nuevo nombre:
                <input type="text" id="nombre_mod" placeholder="Nombre" name="nombre">
            </label>
            <label for="apellido_mod">Ingresa nuevo apellido:
                <input type="text" id="apellido_mod" placeholder="Apellido" name="apellido">
            </label>
            <button id="boton__modificar" type="button" name ="boton__modificar">Modificar</button>
            <div id="mensaje__error__mod"></div>
        </form>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="formulario.js"></script>
</body>
</html>