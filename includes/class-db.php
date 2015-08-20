<?php
 if (!class_exists ('DB')){
   class DB {
     public function __Construct(){
       $mysqli = new mysqli($host, $user, $password, $database);
     }
   }
 }
?>
