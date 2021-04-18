<?php
      $fh = fopen("nickname.txt", 'w') or die("Can't create file!");
      
      $nick = "Hello there: ".$_POST['nick'];

      fwrite($fh, $nick) or die("Error writing file!");
      fclose($fh);
      header("Location: Level-01.html");

      exit();
?>