<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form_POST</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <form action="lab_recebe.php" method="POST">

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

</body>

</html>