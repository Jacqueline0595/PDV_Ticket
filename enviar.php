
<?php

    $conexion = mysqli_connect("localhost", "root", "", "pdv");

    if (isset($_POST['Enviar'])){
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $usuario = trim($_POST['usuario']);
        $direccion = trim($_POST['direccion']);
        $zona_horaria = trim($_POST['zona_horaria']);
        $telefono = trim($_POST['telefono']);
        $extencion = trim($_POST['extencion']);
        $entidad = trim($_POST['entidad']);
        $municipio = trim($_POST['municipio']);
        $localidad = trim($_POST['localidad']);
        $contraseña = trim($_POST['contraseña']);
        $contraseña2 = trim($_POST['contraseña2']);

        $consulta = "INSERT INTO clientes (nombre, correo, usuario, direccion, zona_horaria, telefono, extencion, entidad, municipio, localidad, contraseña, contraseña2) VALUES ('$nombre','$correo','$usuario','$direccion','$zona_horaria','$telefono','$extencion','$entidad','$municipio','$localidad','$contraseña','$contraseña2')";
        
        $resultado = mysqli_query($conexion,$consulta);
        
        
        if ($resultado){
         echo"<h3 class=ok>¡Se han enviadao los datos correctamente!</h3>";   
      
        } else{
            echo "<h3 class=bad>error 1 ¡Ha ocurrido un error! </h3>";
        }
    } else {
        echo"hay un error en tu programa";
    }
    ?>
    <a href="index.html"> <h3>Regresar al Login</h3></a>