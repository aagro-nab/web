<?php
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD = "";
    const DB = "resp_tuiter";

    function connect(){
        //true -> objeto connect
        //false -> bool[false]
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);

        return $conexion;
    }

    //var_dump($conexion);

    //var_dump(connect());

    /* -------------------------------------- PARA CONECTAR OTRA BASE DE DATOS --------------------------------------
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD = "";
    const DB = "jajahoalsbkjfnd";

    function connect(){
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);

        return $conexion;
    }

    //var_dump($conexion);

    var_dump(connect());*/
?>