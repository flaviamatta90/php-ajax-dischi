<?php
include "db.php";

$result = [];

if (empty($_GET["author"]) || $_GET["author"] == "all") {

  $result = $database;

} else {
  $author = $_GET ["author"];

  foreach ($database as $cd) {
    if($cd["author"] == $author){
      $result[] = $cd;
    }
  }
}

header('Content-Type: application/json');
echo json_encode($result);

?>
