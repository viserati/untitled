<html lang="en">
<html>
  <head>

    <meta charset="utf-8">
    <title>Edison</title>

  </head>

  <body>

<h1>Task for the Day</h1>


<ul>


    <?php foreach ($task as $heading => $value) : ?>
<li>
      <strong><?= $heading; ?></strong> <?= $value; ?>
</li>

<?php endforeach; ?>

</ul>
  </body>
</html>
