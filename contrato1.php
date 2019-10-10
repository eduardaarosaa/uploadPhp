<?php
//Cria todas as variaveis
extract($_POST);

$html = <<<HTML
<html>

<head>
    <title>Contrato de Venda de CD - Loja Mozart </title>
</head>

<body bgcolor="#FFFFFF" text="#000000">
    <h2>Contrato Loja Mozart</h2>

    <p>Termo de Compromisso para a Venda de CD no Site da Loja Mozart</p>

    <p>Eu, $nome , $nacionalidade, $civil, músico, residente e
        domiciliado à  $end, $num no bairro da  $bairro, na
        cidade de $cidade , no Estado de $uf, cep: $cep, portador
        do documento de identidade n° $rg - $seg e CPF n° $cpf,
        declaro para fins de direitos autorais que o fonograma de Título: $cd, são de direitos reservados, assim sendo
        confirmo que sou o único responsável pela duplicação
        e comercialização dos mesmos.</p>

    <p>Declaro ainda que me torno o único responsável neste momento
        pela prova de veracidade das informações acima prestadas. No que
        judicial e extra - judicialmente, isento a Loja Mozart, sobre pagamento de direitos
        autorais e autorização para comercialização dos
        fonogramas.</p>

    <br><br>

    São Paulo,  $data.

    <br><br>

    _____________________________________<br>
    Douglas Luiz<br>

    <p>
        <input onClick="self.print();" type="button" value="Imprimir esta página">
    </p>

</body>

</html>
HTML;
echo $html;
