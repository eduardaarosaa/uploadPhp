<?php

$nome = $_POST['nome'];
$nacionalidade = $_POST['nacionalidade'];
$civil = $_POST['civil'];
$end = $_POST['end'];
$num = $_POST['num'];
$cpl = $_POST['cpl'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];
$rg = $_POST['rg'];
$seg = $_POST['seg'];
$cpf = $_POST['cpf'];
$cd = $_POST['cd'];
$data = $_POST['data'];

?>
<html>

<head>
    <title>Contrato de Venda de CD - Loja Mozart </title>
</head>

<body bgcolor="#FFFFFF" text="#000000">
    <h2>Contrato Loja Mozart</h2>

    <p>Termo de Compromisso para a Venda de CD no Site da Loja Mozart</p>

    <p>Eu, <?php echo $nome . ',' . $nacionalidade  . ',' . $civil ?> músico, residente e
        domiciliado à <?php echo $end . ',' . $num ?> no bairro da <?php echo $bairro ?>, na
        cidade de <?php echo $cidade ?> , no Estado de <?php echo $uf ?>, cep: <?php echo $cep ?>, portador
        do documento de identidade n° <?php echo $rg . '-' . $seg ?> e CPF n° <?php echo $cpf ?>,
        declaro para fins de direitos autorais que o fonograma de Título: <?php echo $cd ?>, são de direitos reservados, assim sendo
        confirmo que sou o único responsável pela duplicação
        e comercialização dos mesmos.</p>

    <p>Declaro ainda que me torno o único responsável neste momento
        pela prova de veracidade das informações acima prestadas. No que
        judicial e extra - judicialmente, isento a Loja Mozart, sobre pagamento de direitos
        autorais e autorização para comercialização dos
        fonogramas.</p>

    <br><br>

    São Paulo, <?php echo $data ?>.

    <br><br>

    _____________________________________<br>
    Douglas Luiz<br>

    <p>
        <input onClick="self.print();" type="button" value="Imprimir esta página">
    </p>

</body>

</html>