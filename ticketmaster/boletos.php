<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icon_patito.png" type="image/icon">
    <link rel="stylesheet" href="./statics/style/ticketmaster_style.css">
    <title>Tu Orden</title>
</head>
<body>
    <?php
        
        $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
        $apellido = (isset($_POST["apellido"]) && $_POST["apellido"] != "")? $_POST["apellido"] : false;
        $zona = (isset($_POST["zona"]) && $_POST["zona"] != "")? $_POST["zona"] : false;
        $boletos = (isset($_POST["boletos"]) && $_POST["boletos"] != "")? $_POST["boletos"] : false;
        $artista = (isset($_POST["artista"]) && $_POST["artista"] != "")? $_POST["artista"] : false;
        $fecha = (isset($_POST["fecha"]) && $_POST["fecha"] != "")? $_POST["fecha"] : false;
        $lugar = (isset($_POST["lugar"]) && $_POST["lugar"] != "")? $_POST["lugar"] : false;
        /*$transporte = (isset($_POST["Transporte"]) && $_POST["Transporte"] != "")? $_POST["Transporte"] : NULL;
        $comida = (isset($_POST["Comida"]) && $_POST["Comida"] != "")? $_POST["Comida"] : NULL;
        $taza = (isset($_POST["Comida"]) && $_POST["Comida"] != "")? $_POST["Comida"] : NULL;*/
        $transporte = $_POST["transporte"];

        //$nombre = $_POST['nombre'];
        /*$apellido = $_POST['apellido'];
        $nombre = $_POST['nombre'];
        $nombre = $_POST['nombre'];
        $nombre = $_POST['nombre'];
        $nombre = $_POST['nombre'];
        $nombre = $_POST['nombre'];*/


        echo $nombre.'<br>'; //hecho
        echo $apellido.'<br>'; //hecho
        echo $zona.'<br>';
        echo $boletos.'<br>';
        echo $artista.'<br>'; //hecho
        echo $fecha.'<br>'; //hecho
        echo $lugar.'<br>'; //hecho 
        echo $transporte.'<br>';
        /*echo $comida.'<br>';
        echo $taza;*/

        echo'
        <table align="center" border="1" cellspacing="0"> 
            <tr>
                <td height="100px" align="center" valign="middle" colspan="2"> Ticketmaster 2.0 </td></tr>
            <tr>
                <td width="200" height="65px" align="center" valign="middle"> Evento</td>
                <td width="200" align="center"> '.$artista.'</td></tr>
            <tr>
                <td height="65px" align="center" valign="middle" colspan="2"> <img src="./img/'.$artista.'.jpg" width="350"> </td></tr>
            <tr>
                <td height="65px" align="center" valign="middle"> Datos del comprador </td>
                <td align="center"> '.$nombre." ".$apellido.'</td></tr>
            <tr>
                <td height="65px" align="center" valign="middle"> Lugar </td>
                <td align="center"> '.$lugar.' </td></tr>
            <tr>
                <td height="65px" align="center" valign="middle"> Fecha </td>
                <td align="center"> '.$fecha.'</td></tr>
            <tr>
                <td height="65px" align="center" valign="middle"> Extras </td>
                <td align="center"> '.$fecha.'</td></tr>
            

        </table>';
        

        /*
        La siguiente vista será donde se desplieguen los boletos adquiridos
                
        Se debe desplegar la cantidad de boletos seleccionada.
        En cada boleto se deben desplegar los datos personales solicitados, además de la información del evento, 
            junto con una imagen de la zona, del artista y del lugar y una frase característica del artista elegido.
        En caso de que algún valor no se especifique, debe aparecer un mensaje de error indicando todos los datos
            que faltan por especificar para que el usuario pueda corregir
        En caso de que los boletos sean iguales o menores de cero se imprime el mensaje de error, en caso de que 
            rebasen los 15 se muestran solamente 15 y un mensaje que especifique cuantos faltaron por imprimir.
            El apartado de extras es el único que puede quedar sin ninguna opción seleccionada y en dicho caso se despliega el mensaje "sin extras".
        */

    ?>
</body>
</html>