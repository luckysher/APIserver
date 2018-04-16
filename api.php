<?php
   // <!-- including contorller file  -->
   include 'controller/controller.php';
   // <!-- including contorller file  -->

   $controller = new Controller;
   $json_data = $controller->process_request($_SERVER);

   exit(json_encode($json_data));

?>