<?php
   // <!-- including contorller file  -->
   include 'contorller/contorller.php';
   // <!-- including contorller file  -->

   $contorller = new Contorller;
   $json_data = $contorller->process_request($_SERVER);

   exit(json_encode($json_data));

?>