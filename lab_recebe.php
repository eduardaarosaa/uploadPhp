<?php

$nome = $_POST['nome'];
$html = $_POST['html'];
$css = $_POST['css'];
$js = $_POST['js'];
$php = $_POST['php'];

if (empty($html == true)) {

    echo "É necessário preencher todos os campos";

    exit; //interrompe a interpretação do código naquele momento.

} elseif ($css == true) {
    echo "É necessário preencher todos os campos";

    exit; //interrompe a interpretação do código naquele momento.
} elseif ($js == true) {
    echo "É necessário preencher todos os campos";

    exit; //interrompe a interpretação do código naquele momento.
} elseif ($php == true) {
    echo "É necessário preencher todos os campos";

    exit; //interrompe a interpretação do código naquele momento.
} else {

    $media = ($html + $css + $js + $php) / 4;

    echo "Ola " . $nome . "! sua média é " . $media;
}
