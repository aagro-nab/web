<?php
    require "config.php";
    $conexion =  connect();

    if(!$conexion){
        echo "No se puedo conectar :(";
    }else{
        $id_pokemon = (isset($_GET["id"]) && $_GET["id"] != "")? $_GET["id"] :false;
        
        if($id_pokemon){
            $sql = "DELETE FROM pokemon
            WHERE pok_id = $id_pokemon";
            $res = mysqli_query($conexion, $sql);
            
            if(!$res){
                    echo "No se pudo eliminar el pokemon";
                    $respuesta = array("ok"=>false, "mensaje" => "No se pudo editar el pokemon");
            }else{
                    $respuesta = array("ok"=>true, "mensaje" => "Pokemon eliminado");
            }
        }else{
            $respuesta = array("ok"=>false, "mensaje" => "No se especificó la id");
        }
    }
    echo json_encode($respuesta);
?>