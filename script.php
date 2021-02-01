<?php

session_start();
$categorias = ["Intantil", "Adolescente", "Adulto"];

$nome = $_POST["name"];
$idade = $_POST["idade"];


if (empty($nome) || strlen($nome) < 4 ||  strlen($nome) > 10) {
    $_SESSION["msg-error-nome"] = "Nome não pode ter tamanho menor que 4 nem maior que 10";
    header('location:index.php');
    return;
}else{
    $_SESSION["msg-error-nome"] = null;
}

if ($idade < 6 || $idade > 100) {
    $_SESSION["msg-error-idade"] =  "Idade não pode ser menor que 6 nem maior que 100";
    header('location:index.php');
    
    return;
}else{
    $_SESSION["msg-error-idade"] = null;
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
