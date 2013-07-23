
<?php

if(isset($_POST['bt_submit']))
 {
 $file = "try_it.php";
 $fp = fopen($file, 'w');
 //Following code will store the content in textarea in a variable which will create a file.
 $content = $_POST['txt_data'];
 fwrite($fp, $content);
  fclose($fp);
  }
 ?>
<?php


 if(isset($_POST['bt_submit']))
 {
 echo trim($content);
  }
  else
  {
  echo "<html>\n";
echo "<body>\n";


echo "<h1>Hello World!!!</h1>\n";


echo "</body>\n";
echo "</html>\n";
 } ?>
