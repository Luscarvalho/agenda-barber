<?php
$message = !empty($_SESSION['msg']) ? $_SESSION['msg'] : null;
if (isset($_SESSION["dados"])){
    $nome = $_SESSION["dados"]["nome"];
    $email = $_SESSION["dados"]["email"];
    unset($_SESSION["dados"]);
}else{
    $nome = "";
    $email = "";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="<?= URL_BASE ?>/Source/Styles/css/login-cad.css"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width"/>
    <title>Cadastro</title>
</head>

<body>
<div class="image-login">
    <img src="<?= URL_BASE ?>/Source/Styles/img/barber.svg" alt="Barbeiro"/>
</div>
<div class="card-login">
    <form class="card" action="<?= URL_BASE; ?>/register" method="POST">
        <h1>CADASTRO</h1>
        <p class="password-error">
            <?php
            echo $message;
            unset($_SESSION['msg']);
            ?>
        </p>
        <div class="input-text">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required value="<?=$nome;?>"/>
        </div>
        <div class="input-text">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required value="<?=$email;?>"/>
        </div>
        <div class="input-text">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required/>
        </div>
        <div class="input-text">
            <label for="rep-password">Repetir Senha:</label>
            <input type="password" name="rep-password" id="rep-password" required/>
        </div>
        <p>Já possui conta? <a href="<?= URL_BASE ?>/login">ENTRAR</a></p>
        <input type="submit" name="submit" value="CADASTRAR"/>
    </form>
</div>
</body>

</html>