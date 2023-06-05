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

        //echo $tipo_archivo.'<br>';
        //echo $nombre.'<br>';

        if (!file_exists("../../statics/files"))
        {   
            mkdir("../../statics", 0700);
            mkdir("../../statics/files", 0700);
        }

        if($tipo_archivo == "archivo")
        {
            $archivo = "../../statics/files/$nombre.txt";
            if(file_exists($archivo))
                echo "ERROR: No se puede crear el archivo porque ya existe otro archivo con ese nombre";
            else
                $archivo = fopen("../../statics/files/$nombre.txt", "w+b");
        } 
        else 
        {
            $carpeta = "../../statics/files/ojo/$nombre";   
            if(file_exists($carpeta))
                echo "ERROR: No se puede crear el directorio porque ya existe una carpeta con ese nombre";
            else
                mkdir($carpeta, 0700);
                //rmdir es el comando para borrar directorios
        }

    ?>
</body>
</html>