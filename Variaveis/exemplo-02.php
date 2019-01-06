<?php
/*
$anoNascimento = 1990;
#camel case ~
$nomeCompleto = "";
*/
$nome1 = "João";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

#(,$a,$b)
#unset($nome1);

if (isset($nome1)) {

	echo $nome1;
}
?>