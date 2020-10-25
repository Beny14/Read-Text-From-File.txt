<?php

  $file = 'test.txt';

  if (file_exists($file)){
      //Read file
    echo readfile($file) . '<br />';
      //Copy file
    copy($file, 'quotes.txt');
      //Arata calea
    echo realpath($file) . '<br />';
      //Arata byts
    echo filesize($file) . ' bytes <br />';
      //Redenumeste fisier
    rename($file, 'test.txt');

  }else{
    echo "File does not exist.";
  }
?>
