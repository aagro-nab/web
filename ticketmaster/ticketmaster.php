<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketmaster 2.0</title>
    <link rel="icon" href="./icon_patito.png" type="image/icon">
    <link rel="stylesheet" href="./statics/style/ticketmaster_style.css">
</head>

<body align="middle">
    
<p class = "titulo"> Ticketmaster 2.0 </p>

    <!--En la primera vista, los usuarios se deben registrar y debemos obtener información como:

    Nombre
    Apellido
    Zona (Al menos 4 opciones)
    Número de boletos (Hay un máximo de 15 boletos y un mínimo de uno)
    Artista (Al menos 4 opciones)
    Fecha 
    Lugar (Al menos 4 opciones)
    Si desean que su paquete incluya algún extra. (Al menos 3 opcionales)-->

    <p class = "parrafito"> Bienvenido al Ticketmaster 2.0! <br><br> A continuación introduce tus datos y selecciona los productos que deseas comprar: </p><br>

    
    <form action="./boletos.php" method="post" enctype="multipart/form-data" target="_self">
        <legend><p> </p></legend>
            <label for="nom"> <p class="comprar"> Nombre </p></label>
                <input class="cuadrito" id="nombre" name="nombre" type="text" required> <br>

            <label for="apellido"> <p class="comprar"> Apellido </p></label>
                <input class="cuadrito" id="apellido" name="apellido" type="text" required> <br>

            <label for="zona"> <p class="comprar"> Zona </p></label>
                <select name="zona" required><optgroup>
                    <option value="gradas_a"> Gradas A </option>
                    <option vaule="gradas_b"> Gradas B </option>
                    <option value="general_a"> General A </option>
                    <option value="general_b"> General B </option>
                </optgroup></select>
                <br><br><br><img src=".\img\mapa.jpeg" width="550"><br>

            <label for="boletos"> <p class="comprar"> Cantidad de boletos (máx. 15)</p></label>
                <input class="cuadrito" type="number" name="boletos" min="1" required>

            <label for="artista"> <p class="comprar"> Artista </p></label>
                <select name="artista" required><optgroup>
                    <option value="luismi"> Luis Miguel </option>
                    <option value="billie"> Billie Eillish </option>
                    <option value="rosalia"> Rosalía </option>
                    <option value="kdot"> Kendrick Lamar </option>
                </optgroup></select>

            <label for="fecha"> <p class="comprar"> Fecha </p></label>
                <input class="cuadrito" type="date" name="fecha" min="2023-05-19" required>

            <label for="lugar"> <p class="comprar"> Lugar </p></label>
            <select name="lugar" required><optgroup>
                <option value="Foro Sol"> Foro Sol </option>
                <option value="Palacio de los Deportes"> Palacio de los Deportes </option>
                <option value="Auditorio Nacional"> Auditorio Nacional </option>
                <option value="Pepsi Center WTC "> Pepsi Center WTC </option>
            </optgroup></select>

            <p> Extras </p>
            <p class="comprar"> <label for="transporte"> Transporte </label> <input type="checkbox" name="transporte" value="Transporte"></input></p><br>
            <p class="comprar"> <label for="comida"> Comida </label> <input type="checkbox" name="comida" value="Transporte"></input></p><br>
            <p class="comprar"> <label for="taza"> Taza tematica </label> <input type="checkbox" name="taza" value="Taza Tematiza"></input></p><br>

            <br><br>
            <button type="submit"> Comprar </button>
            <button type="reset"> Borrar </button>
            <br><br>
    </form>
    
    
    <!--
    
    $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
    $apellido = (isset($_POST["apellido"]) && $_POST["apellido"] != "")? $_POST["apellido"] : false;
    $zona = (isset($_POST["zona"]) && $_POST["zona"] != "")? $_POST["zona"] : false;
    $boletos = (isset($_POST["boletos"]) && $_POST["boletos"] != "")? $_POST["boletos"] : false;
    $artista = (isset($_POST["artista"]) && $_POST["artista"] != "")? $_POST["artista"] : false;
    $nombre = (isset($_POST["fecha"]) && $_POST["fecha"] != "")? $_POST["fecha"] : false;
    $lugar = (isset($_POST["lugar"]) && $_POST["lugar"] != "")? $_POST["lugar"] : false;
    $extras = (isset($_POST["extras"]) && $_POST["extras"] != "")? $_POST["extras"] : false;
    
    
    $resto = $boletos - 15;


    //echo $resto;        
    
    
    //for($contador = $boletos; $contador>=0; )

    //isset = variable definida (no null)
    //terniario, basicamente verificar si la variable está vacía -->
    
    
            <!--
    -->


    
</body>
</html>