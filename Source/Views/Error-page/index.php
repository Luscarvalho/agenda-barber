<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link
      rel="stylesheet"
      href="<?= URL_BASE ?>/Source/Styles/css/error-page.css"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <title>Error</title>
  </head>

  <body>
    <div class="image">
      <img src="<?= URL_BASE ?>/Source/Styles/img/cat-error.svg" alt="Error" />
    </div>
    <div class="text-error">
        <?php
        echo "<p>Error {$data["err-code"]}</p>";
        ?>
    </div>
  </body>
</html>
