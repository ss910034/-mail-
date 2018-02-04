<?php 
  $handle = fopen('name.txt', 'w') or die('Can\'t create file');
  fwrite($handle, 'Hamed'."\n");
  fwrite($handle, 'Kamrava'."\n");
  echo 'File was created successfully';
?>
