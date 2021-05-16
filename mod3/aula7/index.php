<?php
   
   include('config.php');

   spl_autoload_register('myAutoLoad');

   new Home\inicial();
   new utilidades();


?>