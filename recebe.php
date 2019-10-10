<?php

//Mostra todos os dados que foram enviados via POST
var_dump($_POST);

$nome = $_POST['nome'];

$idade = $_POST['idade'];

echo "Ola " . $nome . ", sua idade é: " . $idade;
