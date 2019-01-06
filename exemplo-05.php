<?php

$nome = "Glaucio";

function teste() {
	#define que variavel seja executada fora do escopo
	global $nome;
#escopo
	echo $nome;
}

function teste2() {

	$nome = "João";

	echo $nome. " agora no teste2";
}

teste();

teste2();
?>