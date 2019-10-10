<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>toastr</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='toastr.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>
    <form action="error.php" method="POST">

        Nome:<input type="text" name="nome">
        <br>
        HTML:<input type="text" name="html">
        <br>
        CSS:<input type="text" name="css">
        <br>
        JS:<input type="text" name="js">
        <br>
        PHP:<input type="text" name="php">
        <br>
        <input type="submit" name="enviar" value="enviar">
    </form>

    <!-- 
    link para usar o TOASTR
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    -->
    <!-- Documentação TOASTR 
    https://github.com/CodeSeven/toastr
    -->
    <script>
        <?php
        if (isset($_GET['error'])) {
            echo "toastr.error('Preencher o campo " .  $_GET['error'] . "');";
        }
        ?>
    </script>
</body>


</html>