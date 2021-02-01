<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<style>
form{
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Formulario de inscrição de usuarios</h1>
    <form action='script.php' method="post">
        <p>Nome: <input type="text" name="name" /></p>
        <?php
        if (isset($_SESSION["msg-error-nome"])) {
            echo $_SESSION["msg-error-nome"];
        }
        ?>
        <p>Idade: <input type="number" name="idade" /></p>
        <?php
        if (isset($_SESSION["msg-error-idade"])) {
            echo $_SESSION["msg-error-idade"];
        }
        ?>
        <input value="Enviar" type="submit" />
    </form>

</body>

</html>