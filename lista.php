<?php

//PHP CODE





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
</head>
<body>
    <h3>Ingresa año de Inicio</h3>
    <input type="number" name="añoInicio" id="añoInicio" min="0" max="9999">
    <h3>Ingresa año de Terminación</h3>
    <input type="number" name="añoTermino" id="añoTermino" min="0" max="9999">
    <br>
    <button class="w-40 h-9 rounded-xl bg-cyan-900 text-slate-300" onclick="calculo()">Calcular</button>

    <script>
        function calculo(){
            let años = [];
            let bisiestos = [];

            // Convertir a números
            let añoInicio = parseInt(document.getElementById("añoInicio").value);
            let añoTermino = parseInt(document.getElementById("añoTermino").value);

            for (let i = añoInicio; i <= añoTermino; i++) {
                // Agrega todos los años a un arreglo.
                años.push(i);
                // Solo agarra los últimos 2 dígitos.
                let ultimosDigitos = i % 100;

                // Separar si termina con 00 o no y hacer la división.
                let resultado;
                if (ultimosDigitos === 0) {
                    resultado = i / 400;
                } else {
                    resultado = i / 4;
                }

                // Verificar si el resultado es entero
                if (resultado % 1 === 0) {
                    bisiestos.push(i); // Agregar el año bisiesto al array
                }
            }

            // Mostrar los años bisiestos en la consola
            console.log("Años bisiestos:", bisiestos);
        }       

        // Introducir el año inicial y el año final.
        // hacer For desde "i" año inicial hasta "f" año final.
        // agregar "i" al arreglo "años".

        // hacer un If - Si los ultimos 2 digitos "i" es 00 dividir el año entre 400 y meter resultado a "resultado"
        //             - Si No dividir el año entre 4 y meter resultado a "resultado"

        // hacer un If - Si "resultado" es entero enviar a agregar al arreglo "bisiesto".
        //             - Si No descartar.

        // incrementar el año inicial +1.
    </script>
</body>
</html>