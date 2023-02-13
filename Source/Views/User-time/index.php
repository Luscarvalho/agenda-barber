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
    <form class="card" action="<?= URL_BASE; ?>/agendar" method="POST">
        <h1>AGENDAR HORÁRIO</h1>
        <div class="input-text">
            <label for="horario">Horário:</label>
            <?php
            echo "<select>";
            if (!empty($listtime)) {
                foreach ($listtime as $row) {
                    echo "<option value='" . $row['nome'] . "'>" . $row['nome'] . "</option>";
                }
            }
            echo "</select>";
            ?>
        </div>
        <div class="input-text">
            <label for="barber">Barbeiro:</label>
            <?php
            echo "<select>";

            if (!empty($listbarber)) {
                foreach ($listbarber as $row) {
                    echo "<option value='" . $row['nome'] . "'>" . $row['nome'] . "</option>";
                }
            }
            echo "</select>";
            ?>
        </div>
        <div class="input-text">
            <label for="corte">Tipo de corte:</label>
            <select>
                <option value="">Selecione uma opção</option>
            <?php
            if (!empty($listcorte)) {
                foreach ($listcorte as $row) {
                    echo "<option value='" . $row['valor'] . "'>" . $row['nome'] . " - R$ " . $row['valor'] . "</option>";
                }
            }
            ?>
            </select>
        </div>
        <div class="input-text">
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
