<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <form action="4_recebe_post.php" method="POST">
        nome:<input type="text" name="nome">
        <input type='hidden' name='id' value="45">
        <input type="submit" value="enviar">
    </form>

</body>

</html>