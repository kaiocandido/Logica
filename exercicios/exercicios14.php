<?php
    $option = $_POST["calculadora"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="exericicios15.php">
        <?php
            if($option == "media" || $option == "soma") {
                ?>
                <p>Digite um numero para soma ou media: </p>
                Valor:<input type="text" name="txt_a" size="10"> </br>
                Valor:<input type="text" name="txt_b" size="10"> </br>
                Valor:<input type="text" name="txt_c" size="10"> </br>
        <?php
            }
        ?>


        <?php
            if($option == "menor" || $option == "maior"){
                ?>
                <?php
                if($option == "menor" ){
                    ?>
                    <p>Digite um numero para verificar se é maior: </p>
                    Valor:<input type="text" name="txt_a" size="10"> </br>
                    Valor:<input type="text" name="txt_b" size="10"> </br>
        <?php
                }else{
        ?>
                    <p>Digite um numero para verificar se é menor: </p>
                    Valor:<input type="text" name="txt_a" size="10"> </br>
                    Valor:<input type="text" name="txt_b" size="10"> </br>
        <?php
                }
        ?>
        <?php
            }
        ?>

        <?php
            if ($option == "tabuada") {
            ?>
                <p>Digite um numero para tabuada: </p>
                Valor:<input type="text" name="txt_a" size="10"> </br>
        <?php
            }
        ?>


        <p>
            <input type="hidden" name="option" value="<?php $option ?>">
            <input type="submit" value="Enviar dados">
        </p>
    </form>
</body>
</html>