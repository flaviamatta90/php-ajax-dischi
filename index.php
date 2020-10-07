<?php include "db.php"?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <?php if(!empty($database)){?>
        <?php foreach ($database as $databases) { ?>
          <h2><?php echo $databases['title']; ?></h2>
          <h3> <?php echo $databases["author"]?> </h3>
          <h3> <?php echo $databases["year"]?> </h3>
          <img src="<?php echo $databases["poster"]?> ">
          <?php } ?>
      <?php } else {
        echo "Non ci sono album presenti";
      }?>

  </body>
</html>
