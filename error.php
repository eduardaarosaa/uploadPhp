<?php

$nome = $_POST['nome'];
$php = $_POST['php'];
$html = $_POST['html'];
$css = $_POST['css'];
$js = $_POST['js'];


if ($php == "") {
    echo "Preencher a nota de PHP";
    header('Location: toastr.php?error=PHP');
} else if ($html == "") {
    echo "Preencher a nota de HTML";
    header('Location: toastr.php?error=HTML');
} else if ($css == "") {
    echo "Preencher a nota de css";
    header('Location: toastr.php?error=css');
} else if ($js == "") {
    echo "Preencher a nota de js";
    header('Location: toastr.php?error=JS');
} else {

    $media = ($html + $css + $js + $php) / 4;

    echo "Ola " . $nome . "! sua média é " . $media;
}
