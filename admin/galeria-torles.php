<?php
include "../core/connect.php";
session_start();
if (isset($_GET["file"])) {
  $filename = "style/plugins/jquery-file-upload/server/php/files/".$_SESSION["album"].'/'.mysqli_real_escape_string($connect,$_GET["file"]);
  if (file_exists($filename)) {
    unlink($filename);
    header("Location: galeria");
  } else {
    header("Location: galeria");
  }
}

?>