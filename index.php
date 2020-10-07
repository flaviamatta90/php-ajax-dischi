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
          <?php foreach ($database as $databases) { ?>
        <div class="container-main">
          <img class="album-img" src="<?php echo $databases["poster"]?> ">
          <h3><?php echo $databases['title']; ?></h3>
          <h4> <?php echo $databases["author"]?> </h4>
          <h4> <?php echo $databases["year"]?> </h4>
        </div>
          <?php } ?>
        <?php } else {
          echo "Non ci sono album presenti";
        }?>

      </div>
    </main>

  </body>
</html>
