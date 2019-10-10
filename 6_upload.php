<?php

$arquivo = $_FILES['foto'];

if ($arquivo['type'] != "image/jpeg") {

    exit("Formato inválido");
}

$nome = $arquivo['name'];


// " __DIR__" mostra a pasta que está esse arquivo 
// " __DIR__" conhecido como metodo mágico. 
// Se for criar uma pasta tem especificar

if (move_uploaded_file($arquivo['tmp_name'], __DIR__ . "/upload/" . $nome)) {

    echo "Upload realizado com sucesso!";
}
