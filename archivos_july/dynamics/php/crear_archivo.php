<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function asignar($input)
        {
            $input = (isset($_POST[$input]) && $_POST[$input] != "")? $_POST[$input] : false;
            if($input == false)
                echo 'ERROR: No has introducido un dato requerido <br>';
            return $input;
        }
        
        $tipo_archivo = asignar("tipo_archivo");
        $nombre = asignar("nombre");

        echo $tipo_archivo.'<br>';
        echo $nombre.'<br>';

        $archivo = fopen("../../statics/files/$nombre.txt", "w+b");
        //$archivo = fopen("datos.txt", "w+b");

    ?>
</body>
</html>