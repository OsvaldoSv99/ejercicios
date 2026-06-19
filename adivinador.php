<!-- Ejercicio Adivinador: la computadora genera un numero y el usuario intenta descubirlo  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adivina el número</h1>
    <input type="hidden" id="adivinadorNumero" value="<?php echo random_int(1, 100)?>">
    <button type="button" id="revelarBoton" onClick="revelar()">Revelar Numero</button>
    <br><br>
    <input type="text" id="numero">
    <button type="button" onClick="adivinador()">Verificar</button>
</body>
<script>
function adivinador(){
    const numeroInput = document.getElementById("numero")
    const numero = numeroInput.value
    const adivinar = document.getElementById("adivinadorNumero").value

    if (numero.trim() === '' || isNaN(Number(numero))) {
        alert("Agrega una cantidad valida")
        numeroInput.value = ""
    }else{

        if (numero == adivinar) {
            alert("Felicidades, has encontrado el numero")
        }
        if(numero > adivinar) {
            alert("Te pasaste")
            numeroInput.value = ""
        }
        if (numero < adivinar) {
            alert("Aun Falta")
            numeroInput.value = ""
        }

    }
    
}

function revelar(){
    const input = document.getElementById("adivinadorNumero")
    const button = document.getElementById("revelarBoton");
    if (input.type == "hidden") {
        input.type = "text";
        button.textContent = "Ocultar";
    } else {
        input.type ="hidden";
        button.textContent = "Revelar Numero";
    }    
}

</script>
</html>
