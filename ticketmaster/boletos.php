<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icon_patito.png" type="image/icon">
    <link rel="stylesheet" href="./statics/styles/ticketmaster_style.css">
    <title>Tu Orden</title>
</head>
<body>
    <?php
        
        $pobre = 0;

        $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
            if($nombre == false)
                echo 'ERROR: No has introducido tu Nombre';
        $apellido = (isset($_POST["apellido"]) && $_POST["apellido"] != "")? $_POST["apellido"] : false;
            if($apellido == false)
                echo 'ERROR: No has introducido tu Apellido';
        $zona = (isset($_POST["zona"]) && $_POST["zona"] != "")? $_POST["zona"] : false;
            if($zona == false)
                echo 'ERROR: No has introducido tu Zona';
        $boletos = (isset($_POST["boletos"]) && $_POST["boletos"] != "")? $_POST["boletos"] : false;
            if($boletos == false)
                echo 'ERROR: No has introducido tu Cantidad de boletos';
        $artista = (isset($_POST["artista"]) && $_POST["artista"] != "")? $_POST["artista"] : false;
            if($artista == false)
                echo 'ERROR: No has introducido tu Artista';
        $fecha = (isset($_POST["fecha"]) && $_POST["fecha"] != "")? $_POST["fecha"] : false;
            if($fecha == false)
                echo 'ERROR: No has introducido tu Fecha';
        $lugar = (isset($_POST["lugar"]) && $_POST["lugar"] != "")? $_POST["lugar"] : false;
            if($fecha == false)
                echo 'ERROR: No has introducido tu Lugar';

        $transporte = (isset($_POST["transporte"]) && $_POST["transporte"] != "")? $_POST["transporte"] : 1;
            if($transporte == 1)
            {
                $pobre += $transporte;
                $transporte = "";
            }  
        $comida = (isset($_POST["comida"]) && $_POST["comida"] != "")? $_POST["comida"] : 1;
            if($comida == 1)
            {
                $pobre += $comida;
                $comida = "";
            }
        $taza = (isset($_POST["taza"]) && $_POST["taza"] != "")? $_POST["taza"] : 1;
            if($taza == 1)
            {
                $pobre += $taza;
                $taza = "";
            }

        echo '<br><p class="subtitulo" align="center"> Gracias por tu compra! </p>';

        $frase = "";

        switch($artista)
        {
            case "Luis Miguel":
                $frase = "\"Cuando calienta el sol\"";
                break;
            case "Billie Eillish":
                $frase = "\"Can't stop starin' at those ocean eyes\"";
                break;
            case "Rosalia":
                $frase = "\"Okay, motomami\"";
                break;
            case "Kendrick Lamar":
                $frase = "\"But the one in front of the gun lives forever\"";
                break;
        }
        echo '<br><br>';

        if($boletos > 15)
        {
            $resto = $boletos - 15;
            echo '<br> Has pedido mas de 15 boletos. No se han impreso '.$resto.' boletos.';
            $boletos = 15;
        }
        if($boletos <=0)
        {
            echo '<br> ERROR: Has pedido menos de un boleto';
        }

        for($cont=$boletos; $cont>0; $cont=$cont-1)
        {
            echo'
            <p align="center" class="mucho_texto"> Boleto '.$cont.'</p> 
            <table align="center" border="2" cellspacing="0" id="tablita"> 
                <tr>
                    <td height="85px" align="center" valign="middle" colspan="2" class="subtitulo"><b> Ticketmaster 2.0 </b></td></tr>
                <tr>
                    <td width="260" height="52px" align="center" valign="middle"><b> Evento </b></td>
                    <td width="260" align="center"> '.$artista.'</td></tr>
                <tr>
                    <td height="65px" align="center" valign="middle" colspan="2"> <img src="./img/'.$artista.'.jpg" height="100px"> </td></tr>
                <tr>
                    <td height="52px" align="center" valign="middle"><b> Datos del comprador </b></td>
                    <td align="center"> '.$nombre." ".$apellido.'</td></tr>
                <tr>
                    <td height="52px" align="center" valign="middle"><b> Fecha </b></td>
                    <td align="center"> '.$fecha.'</td></tr>
                <tr>
                    <td height="52px" align="center" valign="middle"><b> Lugar </b></td>
                    <td align="center"> '.$lugar.' </td></tr>
                <tr>
                    <td height="65px" align="center" valign="middle" colspan="2"> <img src="./img/'.$lugar.'.jpg" height="90px"> </td></tr>
                <tr>
                    <td width="200" height="52px" align="center" valign="middle"><b> Zona </b></td>
                    <td width="200" align="center"> '.$zona.'</td></tr>
                <tr>
                    <td height="65px" align="center" valign="middle" colspan="2"> <img src="./img/'.$zona.'.jpg" height="90px"> </td></tr>
                <tr>
                    <td height="100px" align="center" valign="middle"><b> Extras </b></td>';
                    if($pobre!=3)
                        echo '<td align="center"> '.$transporte.'<br>'.$comida.'<br>'.$taza.'</td></tr>';
                    else
                        echo '<td align="center"> Sin extras </td></tr>';
                echo '<tr>
                    <td height="70px" align="center" valign="middle" colspan="2"> <i>'.$frase.'</i> </td></tr>
            </table> <br><br>';
        }

    ?>
</body>
</html>