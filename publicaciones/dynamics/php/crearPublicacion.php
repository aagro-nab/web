<?php
    $include = include("./config.php");
    $con = connect();

    if($include && $con){
        date_default_timezone_set("America/Mexico_City");

        $ID_USUARIO = 1;

        $descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"] != "")? $_POST["descripcion"] : false;
        $fecha =  date("d-m-Y");
        $hora = date("h:i");
        $corazon = (isset($_POST["n_corazones"]) && $_POST["n_corazones"] != "")? $_POST["n_corazones"] : false;
        $n_comentarios = (isset($_POST["n_comentarios"]) && $_POST["n_comentarios"] != "")? $_POST["n_comentarios"] : false;
        $n_retuits = (isset($_POST["n_retuits"]) && $_POST["n_retuits"] != "")? $_POST["n_retuits"] : false;
        
        // $descripcion = "'Descripcion nueva'";
        // $fecha = "01-06-2023";
        // $hora = "10:00";
        // $corazon = 1;
        // $n_comentarios = 3; 
        // $n_retuits = 5;

        //------------------------------PETICION INSERTAR------------------------------

        $peticion = "INSERT INTO publicacion VALUES (0, 1, '$descripcion', '$fecha', '$hora', $corazon, $n_comentarios, $n_retuits)";
        $query = mysqli_query($con, $peticion);
        if($query == 1){
            echo "Tuit publicado";
        }else{
            echo "Algo salió mal";
        };

        //mysqli_query
        //  si introducida -> bool(true)
        //  no introducida -> bool(false)

        //------------------------------PETICION CONSULTAR------------------------------

        // $sql = "SELECT * FROM usuarios";

        // $query = mysqli_query($con, $sql);

        // var_dump($query);

        // $datos = mysqli_fetch_array($query);
        //te desplega los registros de una tabla con las localidades de los datos

        // $datos = mysqli_fetch_assoc($query);
        //como fetch_array pero sin las localidades, y solo un registro
        // var_dump($datos);

        // echo '<br><br><br><br>';

        // $datos = mysqli_fetch_assoc($query);
        //imprime el siguiente registro
        // var_dump($datos);

        // while($row = mysqli_fetch_assoc($query))
        // {
        //     echo "<br>";
        //     echo "<br>";
        //     var_dump($row);
        // }
    }
?>
