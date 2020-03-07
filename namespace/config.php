<?php

spl_autoload_register(function($nameClass){

  $dirClass = "class";
  // filename se refere ao path, todo nome, o caminho, na documentação geralmente é esse nome, mas faria mais sentido filePath
  $filename = $dirClass . DIRECTORY_SEPARATOR  . $nameClass . ".php";
   
  if(file_exists($filename)){

     require_once($filename);

  }
  

});


?>