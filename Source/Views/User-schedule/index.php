<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="<?= URL_BASE; ?>/Source/Styles/css/user-options.css" />
    <script
        src="https://kit.fontawesome.com/318ebcd3aa.js"
        crossorigin="anonymous"
    ></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <title>Agendar</title>
</head>
<body>
<header>
    <a href="#">Logo</a>
    <ul>
        <li><a href="#">Sair</a></li>
    </ul>
</header>
<section class="form-agendar">
    <form class="card" action="<?= URL_BASE; ?>" method="POST">
        <h1>AGENDAR HORÁRIO</h1>
        <div class="input-text">
            <label for="horario">Horário:</label>
            <select name="horario">
                <option value="POST">POST</option>
                <option value="PUT">PUT</option>
                <option value="PATCH">PATCH</option>
                <option value="DELETE">DELETE</option>
            </select>
        </div>
        <div class="input-text">
            <label for="horario">Barbeiro:</label>
            <select name="barber">
                <option value="POST">POST</option>
                <option value="PUT">PUT</option>
                <option value="PATCH">PATCH</option>
                <option value="DELETE">DELETE</option>
            </select>
        </div>
        <div class="input-text">
            <label for="corte">Tipo de corte:</label>
            <select name="corte">
                <option value="Degrade">Degradê</option>
                <option value="Social">Social</option>
                <option value="Tesoura">Tesoura</option>
                <option value="cabelo-barba">Cabelo e Barba</option>
            </select>
        </div>
        <div class="input-text">
            <p>Valor:</p>
        </div>
        <input type="submit" name="submit" value="AGENDAR" />
    </form>
</section>
<footer>
    <p>AEL SYSTEMS</p>
    <p>2022</p>
</footer>
</body>
</html>
