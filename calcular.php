<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ola</title>
    </head>
    <body>
        O resultado da operacao
        <?php
            
            switch($_POST["operacao"]) {
                case "somar":
                    
                    echo $_POST["operacao"]." " . "é" . " " .$_POST["primeiro"] + $_POST["segundo"];
                    break;
                case "subtrair":
                    
                    echo $_POST["operacao"]." " . "é" . " " . $_POST["primeiro"] - $_POST["segundo"];
                    break;
                case "multiplicar":
                    echo $_POST["operacao"]." " . "é" . " " . $_POST["primeiro"] * $_POST["segundo"];
                    break;
                case "dividir":
                    echo $_POST["operacao"]." " . "é" . " " . $_POST["primeiro"] / $_POST["segundo"];
                    break;
            }
        ?>
    </body>
</html>