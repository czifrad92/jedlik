<?php
if (isset($_GET["name"])) {

  $dir = "style/plugins/jquery-file-upload/server/php/files/".$_GET["name"];
  	
  if (is_dir($dir)) {
     $objects = scandir($dir);
     foreach ($objects as $object) {
       if ($object != "." && $object != "..") {
         if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
       }
     }
     reset($objects);
     rmdir($dir);
   }
   header("Location: galeria");
}

?>