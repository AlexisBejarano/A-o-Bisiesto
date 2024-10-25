<?php

//PHP CODE

// Introducir el año inicial y el año final.
// hacer For desde "i" año inicial hasta "f" año final.
// Determinar si "i" la terminacion es indistinto a 00 o 00.
// hacer un If - Si 00 dividir el año entre 400
//             - Si No dividir el año entre 4
// Si es entero es bisiesto agregar a un arreglo.
// incrementar el año inicial +1. 


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
<!-- GoogleFonts -->


<!-- TailWindCss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            //Ejemplo.
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>
<body>
    <h3>Ingresa año de Inicio</h3>
    <input type="number" name="añoInicio" min="0" max="9999">
    <h3>Ingresa año de Terminación</h3>
    <input type="number" name="añoInicio" min="0" max="9999">
    <br>
    <button class="w-40 h-9 rounded-xl bg-cyan-900 text-slate-300" onclick()>Calcular</button>

</body>
</html>