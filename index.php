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
        <div class="container-main">
          <?php if(!empty($database)){?>
            <?php foreach ($database as $databases) { ?>
              <img class="album-img" src="<?php echo $databases["poster"]?> ">
              <h2><?php echo $databases['title']; ?></h2>
              <h3> <?php echo $databases["author"]?> </h3>
              <h3> <?php echo $databases["year"]?> </h3>
              <?php } ?>
          <?php } else {
            echo "Non ci sono album presenti";
          }?>
        </div>
      </div>
    </main>

  </body>
</html>
