<?php
// Validar si se enviaron los datos
if (isset($_POST['añoInicio']) && isset($_POST['añoTermino'])) {
    $añoInicio = intval($_POST['añoInicio']);
    $añoTermino = intval($_POST['añoTermino']);
    
    $años = [];
    $bisiestos = [];

    for ($i = $añoInicio; $i <= $añoTermino; $i++) {
        // Agregar todos los años a un arreglo.
        $años[] = $i;

        // Solo agarra los últimos 2 dígitos.
        $ultimosDigitos = $i % 100;

       // Verificar si el año es bisiesto
        if ($ultimosDigitos === 0) {
            // Año termina en 00, debe ser divisible por 400
            if ($i % 400 === 0) {
                $bisiestos[] = $i; // Agregar el año bisiesto al array
            }
        } else {
            // Año no termina en 00, debe ser divisible por 4 y no por 100
            if ($i % 4 === 0 && $i % 100 !== 0) {
                $bisiestos[] = $i; // Agregar el año bisiesto al array
            }
        }

    }

    // Devolver resultado como JSON
    echo json_encode($bisiestos);
} else {
    echo json_encode(["error" => "Parámetros no válidos"]);
}

// Introducir el año inicial y el año final.
// hacer For desde "i" año inicial hasta "f" año final.
// agregar "i" al arreglo "años".

// hacer un If - Si los ultimos 2 digitos "i" es 00 dividir el año entre 400 y meter resultado a "resultado"
//             - Si No dividir el año entre 4 y meter resultado a "resultado"

// hacer un If - Si "resultado" es entero enviar a agregar al arreglo "bisiesto".
//             - Si No descartar.

// incrementar el año inicial +1.*/
?>


