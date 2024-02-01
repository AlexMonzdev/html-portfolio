<?php
    //Obtener datos get
    var_dump($_GET);

    //Obtener el nombre
    echo "<br/>";
    $nombre_enviado = isset($_GET['nombre']) ? $_GET['nombre'] : '';
    echo $nombre_enviado;

    //Obtener valor del select 
    echo "<br/>";
    echo $documento = $_GET["tipo_documento"];

    //Obtener valor del select 
    echo "<br/>";
    echo $textArea= $_GET["observacion"];

    //Obtener valor de checkbox 
    echo "<br/>";
    echo $opcion_1= isset($_GET["opcion_1"]) ? "opcion_1 " . $_GET["opcion_1"] : '';

    //Obtener valor de checkbox 
    echo "<br/>";
    echo $opcion_2= isset($_GET["opcion_2"]) ? "opcion_2 " . $_GET["opcion_2"] : '';

    //Obtener valor de checkbox 
    echo "<br/>";
    $vehiculo = $_GET["vehiculo"];
    print_r($vehiculo);

    //Obtener valor de radiobuton 
    echo "<br/>";
    $genero = "genero: " . $_GET["genero"];
    echo $genero;



?>