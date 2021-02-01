<?php

$categorias = ["Intantil", "Adolescente", "Adulto"];

$nome = $_POST["name"];
$idade = $_POST["idade"];

echo "<a href='index.php'>Voltar</a><br>";
if (empty($nome) || strlen($nome) < 4 ||  strlen($nome) > 10) {
    echo "Nome não pode ter tamanho menor que 4 nem maior que 10";
    return;
}

if ($idade < 6 || $idade > 100) {
    echo "Idade não pode ser menor que 6 nem maior que 100";
    return;
}

printf("Nadador: " . $nome);
print("<br>");
if ($idade >= 6 && $idade <= 12) {
    printf("Categoria : {$categorias[0]}");
} else if ($idade <= 18) {
    printf("Categoria : {$categorias[1]}");
} else {
    printf("Categoria : {$categorias[2]}");
}
