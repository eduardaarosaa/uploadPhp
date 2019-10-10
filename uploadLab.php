<?php

$nome = $_POST['nome'];
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$foto = $_FILES['foto'];


if ($foto['type'] != "image/jpeg") {

    exit("Formato inválido");
}
$nomeft = $foto['name'];

if (move_uploaded_file($foto['tmp_name'], __DIR__ . "/upload/" . $nomeft)) { }
echo "<h1>" . $nome . "</h1>";
echo "<br>";
echo "<img src='upload/$nomeft' width='200px'>";
