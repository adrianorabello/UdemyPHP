<?php
   session_start();

   //imprime a chade da sessao
   echo session_id();
   session_destroy();

   session_start();
   // gera uma nova chave para sessao 
   session_regenerate_id();
   echo "<br>";
   echo session_id();


 ?>
