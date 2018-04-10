<?php
   // <!-- including Server file  -->
   include 'server/server.php';
   // <!-- including Server file  -->

   $server = new Server;
   $json_data = $server->process_request($_SERVER);

   exit(json_encode($json_data));

?>