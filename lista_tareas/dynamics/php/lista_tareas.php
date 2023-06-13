<?php
    function asignar($input)
    {
        $input = (isset($_POST[$input]) && $_POST[$input] != "")? $_POST[$input] : false;
        if($input == false)
            echo 'ERROR: No has introducido un dato requerido <br>';
        return $input;
    }
    $nombre = asignar("nombre");
    $materia = asignar("materia");

    $nombrej = json_encode($nombre);

    return $nombrej;
?>