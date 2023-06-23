<?php

    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';

    $archivos = $_FILES['archivos'];

    $carpetaDestino = '../document/';

    $nomArchivo1 = $archivos['name'][0];
    $nomArchivo2 = $archivos['name'][1];
    $nomArchivo3 = $archivos['name'][2];

    $numArchivos = count($archivos['name']);


    for ($i = 0; $i < $numArchivos; $i++) {

        $nombreArchivo = $archivos['name'][$i];
        move_uploaded_file($archivos['tmp_name'][$i], $carpetaDestino . $nombreArchivo);

    }

require '../conexion/conexion.php';

$sSQL= "INSERT INTO archivos SET 
nombre_archivo='$nomArchivo1',
nombre_archivo2='$nomArchivo2',
nombre_archivo3='$nomArchivo3',
nombre='$nombre'
";

echo mysqli_query($conn, $sSQL); 



?>