<?php
    // Recibir datos
    $Nombre = $_POST['name'];
    $ApellidoPaterno = $_POST['apellidoPaterno'];
    $ApellidoMaterno = $_POST['apellidoMaterno'];
    $Edad = $_POST['edad'];
    $Hobby = $_POST['hobby'];

    // Guardar datos
    $archivo = fopen("datos.txt", "a");
    fwrite($archivo, "Nombre: " . $Nombre . "\n");
    fwrite($archivo, "Apellido Paterno: " . $ApellidoPaterno . "\n");
    fwrite($archivo, "Apellido Materno: " . $ApellidoMaterno . "\n");
    fwrite($archivo, "Edad: " . $Edad . "\n");
    fwrite($archivo, "Hobby: " . $Hobby . "\n");
    fwrite($archivo, "-----------------------------------\n");
    fclose($archivo);
    
    // Redireccionar a la página principal
    header("Location: index.html");

?>