<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="<?= URL_BASE ?>/Source/Styles/css/admin-client.css" />
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
    <section class="options">
      <a href="<?= URL_BASE ?>/admin/horarios">
        <span style="color: white">
          <i class="fa-regular fa-clock fa-5x"></i>
        </span>
        <p>Horários</p>
      </a>
      <a href="<?= URL_BASE ?>/admin/agenda">
        <span style="color: white">
          <i class="fa-regular fa-calendar-check fa-5x"></i>
        </span>
        <p>Minha Agenda</p>
      </a>
      <a href="<?= URL_BASE ?>/admin/perfil">
        <span style="color: white">
          <i class="fa-regular fa-user fa-5x"></i>
        </span>
        <p>Perfil</p>
      </a>
        <a href="<?= URL_BASE ?>/admin/register">
        <span style="color: white">
          <i class="fa-regular fa-user fa-5x"></i>
        </span>
            <p>Cadastrar</p>
        </a>
    </section>
    <footer>
      <p>AEL SYSTEMS</p>
      <p>2022</p>
    </footer>
  </body>
</html>
