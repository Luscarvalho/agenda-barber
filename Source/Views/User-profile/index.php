<?php
if (!empty($fillprofile)) {
    foreach ($fillprofile as $row) {
        $nome = $row["nome"];
        $email = $row["email"];
        $senha = $row["senha"];
        $repetir_senha = $row["repetir_senha"];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="<?= URL_BASE ?>/Source/Styles/css/user-options.css" />
    <script
        src="https://kit.fontawesome.com/318ebcd3aa.js"
        crossorigin="anonymous"
    ></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <title>Administrador</title>
</head>
<body>
<header>
    <a href="#">Logo</a>
    <ul>
        <li><a href="#">Sair</a></li>
    </ul>
</header>
<section class="form-editar">
    <form class="card" action="<?= URL_BASE; ?>/perfil" method="POST">
        <h1>EDITAR CADASTRO</h1>

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
            <input type="password" name="password" id="password" required value="<?=$senha;?>"/>
        </div>
        <div class="input-text">
            <label for="rep-password">Repetir Senha:</label>
            <input
                type="password"
                name="rep-password"
                id="rep-password"
                required
                value="<?=$repetir_senha;?>"
            />
        </div>
        <input type="submit" name="submit" value="Editar Cadastro" />
    </form>
</section>
<footer>
    <p>AEL SYSTEMS</p>
    <p>2022</p>
</footer>
</body>
</html>
