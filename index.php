<html lang="en">
<html>
  <head>
    <meta charset="utf-8">
    <title>Edison</title>
    <style>

      header {

        background: #d84818;
        padding: 1em;
        text-align: center;

      }
    </style>

  </head>

  <body>
    <header>

  <h1>

  <?= "Hello, " . htmlspecialchars($_GET['name']); ?>

  </h1>

    </header>
  </body>
</html>
