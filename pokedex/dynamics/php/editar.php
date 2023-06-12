<?php
    require "config.php";
    $conexion = connect();
    if(!$conexion)
    {
        echo "No se pudo conectar con la base";
    }else{
        $id = (isset($_POST["id"]) && $_POST["id"] != "")? $_POST["id"] : false;
        $altura = (isset($_POST["altura"]) && $_POST["altura"] != "")? $_POST["altura"] : false;
        $peso = (isset($_POST["peso"]) && $_POST["peso"] != "")? $_POST["peso"] : false;
        $experiencia = (isset($_POST["experiencia"]) && $_POST["experiencia"] != "")? $_POST["experiencia"] : false;
        $tipo = (isset($_POST["tipo"]) && $_POST["tipo"] != "")? $_POST["tipo"] : false;

       if($id && $altura && $peso && $experiencia && $tipo)
       {
            $sql = "UPDATE pokemon 
            SET pok_height = $altura, pok_weight = $peso, pok_base_experience = $experiencia
            WHERE pok_id = $id ";
            // $sql = "INSERT INTO pokemon (pok_name, pok_height,pok_weight, pok_base_experience)
            // VALUES ('$nombre', '$altura', '$peso', '$exp_base')";
            $res = mysqli_query($conexion, $sql);
            // $id = mysqli_insert_id($conexion);
            $sql2 = "UPDATE pokemon_types
            SET type_id = '$tipo'
            WHERE pok_id = $id";
            // $sql2 = "INSERT INTO pokemon_types (pok_id, type_id) VALUES ('$id', '$tipo')";
            $res2 = mysqli_query($conexion, $sql2);
            if(!$res || !$res2)
            {
                echo "No se pudo insertar el pokemon";
                $respuesta = array("ok"=>false, "mensaje" => "No se pudo editar el pokemon");
            } else{
                $respuesta = array("ok"=>true, "mensaje" => "Pokemon actualizado");
            }
       }else{
            if(!$id)
            {
                $respuesta = array("ok"=>false, "mensaje" => "No se especificó la id");
            }else if ( !$altura){
                $respuesta = array("ok"=>false, "mensaje" => "No se especificó la alutra");
            }else if ( !$peso){
                $respuesta = array("ok"=>false, "mensaje" => "No se especificó el peso");
            }else if ( !$experiencia){
                $respuesta = array("ok"=>false, "mensaje" => "No se especificó la experiencia");
            }
       }
    }
    echo json_encode($respuesta)
?>                    