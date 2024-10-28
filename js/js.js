function calculo() {
    // Obtener valores
    let añoInicio = document.getElementById("añoInicio").value;
    let añoTermino = document.getElementById("añoTermino").value;

    if (añoInicio.length == 4 || añoTermino == 4){
        if (añoInicio <= añoTermino){
            // Realizar solicitud POST a bisiestos.php
            fetch('php/bisiestos.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `añoInicio=${añoInicio}&añoTermino=${añoTermino}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    console.error(data.error);
                } else {
                    console.log("Años bisiestos:", data);
                    alert("Años bisiestos: " + data.join(", "));
                }
            })
            .catch(error => console.error("Error en la solicitud:", error));
        } else {
            alert("Ingresa un año correcto")
        }
    } else {
        alert("Ingresa un año correcto")
    }
}     

