function calculo() {
    // Obtener valores
    let anioInicio = document.getElementById("anioInicio").value;
    let anioTermino = document.getElementById("anioTermino").value;

    // Obtener el contenedor para los resultados
    const resultadosDiv = document.getElementById("resultados");

    // Limpiar resultados previos
    resultadosDiv.innerHTML = '';

    if (anioInicio.length == 4 && anioTermino.length == 4) {
        if (anioInicio <= anioTermino) {
            // Realizar solicitud POST a bisiestos.php
            fetch('php/bisiestos.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `anioInicio=${anioInicio}&anioTermino=${anioTermino}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    console.error(data.error);
                } else {
                    console.log("Años bisiestos:", data);
                    
                    // Crear un párrafo para mostrar los resultados
                    const p = document.createElement("p");
                    p.innerHTML = "<strong><h2>AÑOS BISIESTOS: </h2></strong>" + data.join(", ");
                    resultadosDiv.appendChild(p);
                }
            })
            .catch(error => console.error("Error en la solicitud:", error));
        } else {
            alert("Ingresa un año correcto");
        }
    } else {
        alert("Ingresa un año correcto");
    }
}


