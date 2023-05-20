<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketmaster 2.0</title>
    <link rel="icon" href="./icon_patito.png" type="image/icon">
    <link rel="stylesheet" href="./statics/styles/ticketmaster_style.css"> 
</head>

<body align="middle">
    
    <br><br> <div class = "titulo"> Ticketmaster 2.0 </div>

    <div class = "mucho_texto">
    <p> Bienvenido al Ticketmaster 2.0! <br><br> A continuación introduce tus datos y selecciona los productos que deseas comprar: </p><br></div>
    <div class = "subtitulo">
    <form action="./boletos.php" method="post" enctype="multipart/form-data" target="_self">
        <legend><p> </p></legend>
            <label for="nom" class="comprar"><b> Nombre </b></label><br><br>
                <input class="cuadrito" id="nombre" name="nombre" type="text" required> <br><br>

            <label for="apellido" class="comprar"><b> Apellido </b></label><br><br>
                <input class="cuadrito" id="apellido" name="apellido" type="text" required> <br><br>

            <label for="zona" class="comprar"><b> Zona </b></label><br><br>
                <select name="zona" class="cuadrito" required><optgroup>
                    <option value="Gradas A"> Gradas A </option>
                    <option vaule="Gradas B"> Gradas B </option>
                    <option value="General A"> General A </option>
                    <option value="General B"> General B </option>
                </optgroup></select><br><br>

            <label for="boletos" class="comprar"><b> Cantidad de boletos (máx. 15) </b></label><br><br>
                <input class="cuadrito" type="number" name="boletos" min="1" max="15" required>
            <br><br>

            <label for="artista" class="comprar"><b> Artista </b></label><br><br>
                <select name="artista" class="cuadrito" required><optgroup>
                    <option value="Luis Miguel"> Luis Miguel </option>
                    <option value="Billie Eillish"> Billie Eillish </option>
                    <option value="Rosalia"> Rosalía </option>
                    <option value="Kendrick Lamar"> Kendrick Lamar </option>
                </optgroup></select><br><br>

            <label for="fecha" class="comprar"><b> Fecha </b></label><br><br>
                <input class="cuadrito" type="date" name="fecha" min="2023-05-19" required><br><br>

            <label for="lugar" class="comprar"><b> Lugar </b></label><br><br>
            <select name="lugar" class="cuadrito" required><optgroup>
                <option value="Foro Sol"> Foro Sol </option>
                <option value="Palacio de los Deportes"> Palacio de los Deportes </option>
                <option value="Auditorio Nacional"> Auditorio Nacional </option>
                <option value="Pepsi Center WTC"> Pepsi Center WTC </option>
            </optgroup></select>

            <br><br><label class="comprar"><b> Extras </b></label><br><br></div>
            <div class="mucho_texto"><table align="center">
                <tr>
                    <td align="left" width="450px"><label for="transporte" class="comprar"> Transporte </label></td>
                    <td align="left"><input type="checkbox" name="transporte" value="Transporte"></input></td></tr>
                <tr>
                    <td align="left"> <label for="comida" class="comprar"> Comida </label> </td>
                    <td align="left"><input type="checkbox" name="comida" value="Comida"></input></td></tr>
                <tr>
                    <td align="left"><label for="taza" class="comprar"> Taza tematica </td></label> 
                    <td align="left"><input type="checkbox" name="taza" value="Taza Tematica"></input></td></tr>
            </table></div>
            <br><br>
            <button type="submit"> Comprar </button>
            <button type="reset"> Borrar </button>
            <br><br>
    </form>

    
</body>
</html>