<?php include "db.php"?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>Album PHP</title>
  </head>
  <body>
    <header>
      <div class="inside-header">
        <img class="logo" src="logo.png" alt="logo">
      </div>
    </header>
    <main>
      <div class="inside-main">
        <?php if(!empty($database)){?>
          <?php foreach ($database as $albums) { ?>
        <div class="container-main">
          <img class="album-img" src="<?php echo $albums["poster"]?> ">
          <h3><?php echo $albums['title']; ?></h3>
          <h4> <?php echo $albums["author"]?> </h4>
          <h4> <?php echo $albums["year"]?> </h4>
        </div>
          <?php } ?>
        <?php } else {
          echo "Non ci sono album presenti";
        }?>
      </div>
    </main>

  </body>
</html>
