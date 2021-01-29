<?php

$categorias = [];
$categorias[] = "Intantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";

$nome = "Marcelo";
$idade = 22;

printf("Nadador: " . $nome);
print("<br>");
if ($idade >= 6 && $idade <= 12) {
    printf("Categoria : {$categorias[0]}");
} else if ($idade <= 18) {
    printf("Categoria : {$categorias[1]}");
} else {
    printf("Categoria : {$categorias[2]}");
}

function teste ($e){
    printf($e);
}
?>
<input type="text" onchange="e => $teste(e)">