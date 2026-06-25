<?php

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="">
        <p>
                Qual curso voce vai fazer: </br></br>
                    <input type="radio" name="curso" size="30" value="Logica"/>Logica de Programação </br>
                    <input type="radio" name="curso" size="30" value="PHP"/>PHP </br>
                    <input type="radio" name="curso" size="30" value="Java"/>Java </br> 
                    <input type="radio" name="curso" size="30" value="React"/>React </br></br>
            </b>
        </p>

        <p>
            Qual a melhor linguagem de Programação: </br>

            <select name="melhor_Curso" size="1">
                <option>PHP</option>
                <option>JAVA</option>
                <option>C#</option>
            </select>
        </p>

        <p>
            Digite o seu comentario abaixo: </br>
            <textarea name="comentarios" rows="10" cols="55"></textarea>
        </p>

        <p>
            Deixe seu dados para contato: </br>
            Nome:<input type="text" size="35" maxlength="200" name="nome"/> </br>
            Telefone:<input type="phone" size="35" maxlength="200" name="Telefone"/> </br>
            Email:<input type="email" size="35" maxlength="200" name="email"/> </br>
            Senha:<input type="password" size="35" maxlength="200" name="senha"/> </br>
        </p>

        <p>
            <input type="checkbox" name="noticias" value="noticias"> Desejo receber noticias!! </br>
        </p>

        <p>
            <input type="submit" value="Enviar Dados"/>
            <input type="reset" value="Limpar Dados"/>
        </p>

    </form>
</body>
</html>