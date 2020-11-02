 function validar() {
  var correo, clave, sube, cc, mm, aa, cvv;
  correo = document.getElementById("correo").value;
  clave = document.getElementById("clave").value;
  sube = document.getElementById("sube").value;
  cc = document.getElementById("cc").value;
  mm = document.getElementById("mm").value;
  aa = document.getElementById("aa").value;
  cvv = document.getElementById("cvv").value;
  
  expresion = /\w+@\w+\.+[a-z]/;

  if(isNaN(cc)){
    alert("ERROR, NO LETRAS.");
    return false;
  }
  
   else if (correo === "") {
alert("El campo correo esta vacio.")
    return false;
  }
  else if (!expresion.test(correo)) {
alert("El correo no es valido.")
    return false;
  }  
  
     else if (sube <  60609999999999999 & sube < 60619999999999999 ){
    alert("Número sube incorrecto")
    return false;
  }
   else if (sube > 6999999999999999 & sube < 6999999999999999 ){
    alert("Aplicando carga a su sube")
  
  }
    else if (isNaN(aa)){
    alert("ERROR, NO LETRAS.")
    return false;
  }
      else if(isNaN(mm)){
      alert("ERROR mm:NO LETRAS.")
      return false;
  }
        
    else if(isNaN(cvv)){
    alert("ERROR, NO LETRAS.")
    return false;
  }

    else if (cvv === "" || cc === "" || mm === "" || aa === "" || correo === ""|| clave === ""|| sube === ""){
    alert("TODOS LOS CAMPOS SON REQUERIDOS")
    return false;
  }
    else if (cvv >= 9999){
    alert("cvv no puede ser mayor a 4 digitos")
    return false;
  }
    else if (cvv <= 0){
    alert("CVV incorrecto")
    return false;
  }
    else if (mm > 12 ||(isNaN(mm))){
    alert("el mm debe ir del 07-12")
    return false;
  } else if (aa <= 18 ){
    alert("Tarjeta vencida")
    return false;
  }
  else if (aa > 30 ){
    alert("Año incorrecto")
    return false;
  }
   else if (mm == 07 & aa == 19){
    alert("Su tarjeta vencio este mes")
    return false;
  }
    else if (aa <= 2018 & aa <= 18){
    alert("el año debe ir del 19 en adelante")
    return false;
  }
    else if (aa < 18){
    alert("el mes debe ir del 01-12")
    return false;
  }
  else if (cc < 2999999999999999 || cc > 6999999999999999){
    alert("tarjeta incorrecta")
    return false;
  }
  
    else if (cc > 2999999999999999 & cc < 3999999999999999){
    alert("Validando su tarjeta Amex")
  
    
  }
  else if(cc > 2999999999999999 & cc < 3999999999999999 & mm < 04 & aa < 19){
    alert("Su tarjeta Amex esta vencida")
    
  }
    else if (cc > 4999999999999999 & cc < 5999999999999999){
    alert("Validando su tarjeta Mastercard")
    
  }
    else if (cc > 3999999999999999 & cc < 4999999999999999){
    alert("Validando su tarjeta Visa")
    
  }
    else if (cc > 5999999999999999 & cc < 6999999999999999){
    alert("Validando su tarjeta Diners")
    
  }

}