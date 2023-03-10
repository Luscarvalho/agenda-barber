<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="<?= URL_BASE ?>/Source/Styles/css/login-cad.css"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width"/>
    <title>Login</title>
</head>

<body>
<div class="image-login">
    <img src="<?= URL_BASE ?>/Source/Styles/img/barber.svg" alt="Barbeiro"/>
</div>
<div class="card-login">
    <form class="card" action="<?= URL_BASE; ?>/login" method="POST" id="form-login">
        <h1>LOGIN</h1>
        <div class="input-text">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required"/>
        </div>
        <div class="input-text">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required/>
        </div>
        <p>Não possui conta? <a href="<?= URL_BASE ?>/register">REGISTRAR</a></p>
        <input type="submit" name="ENTRAR" value="ENTRAR"/>
    </form>
</div>
</body>

</html>