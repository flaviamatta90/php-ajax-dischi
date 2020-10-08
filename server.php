<?php
include "db.php";

header('Content-Type: application/json');

echo json_encode($database);
 ?>
<!-- Attraverso un’altra chiamata ajax, filtrare gli album per artista -->
