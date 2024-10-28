function calculo() {
    // Obtener valores
    let añoInicio = document.getElementById("añoInicio").value;
    let añoTermino = document.getElementById("añoTermino").value;

    // Realizar solicitud POST a calculo.php
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
}     

