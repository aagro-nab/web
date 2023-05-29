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
        $usuario = "Julieta";
        echo "<p> Especifica que archivo vas a crear ".$usuario."</p>";
    ?>
        <p><br> ¿Archivo o carpeta? </p>
        <form class="form" action="./crear_archivo.php" method="post" enctype="multipart/form-data" target="_self">

            <label for="tipo_archivo"><br>Archivo</label>
            <input type="radio" name="tipo_archivo" value="archivo"/>

            <br>   

            <label for="tipo_archivo"><br>Carpeta</label>
            <input type="radio" name="tipo_archivo" value="carpeta"/>
                
            <br>

            <label for="nombre_archivo"><br>Nombre del archivo o carpeta<br><br></label>
            <input type="text" name="nombre"/>

            <br><br>

            <button type="submit"> Aceptar </button>
        </form>
</body>
</html>