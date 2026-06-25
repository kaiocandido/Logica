<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicios14.php" method="POST">
        <p>Qual operação voce deseja?  </br>
            <input type="radio" name="calculadora" value="media"> Calcular Media </br>
            <input type="radio" name="calculadora" value="soma"> Calcular Soma </br>
            <input type="radio" name="calculadora" value="maior"> Mostrar o maior </br>
            <input type="radio" name="calculadora" value="menor"> Mostrar o menor </br>
            <input type="radio" name="calculadora" value="tabuada"> Listar tabuada </br>
        </p>

        <p>
            <input type="submit" value="Enviar dados">
        </p>
    </form>
</body>
</html>