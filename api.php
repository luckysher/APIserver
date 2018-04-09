<?php
   // <!-- including Server file  -->
   include 'server/server.php';
   // <!-- including Server file  -->

   //$test = [
   //         array('name' => 'api', 'language' => 'PHP', 'uses'=> 'configuration server')];

   $server = new Server;

   $json_data = server->process_request($_POST, $_GET);

   exit(json_encode($json_data));

?>