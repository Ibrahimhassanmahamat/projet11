<?php

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "ibrah");

$dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

try{
    $db = new PDO($dsn, DBUSER, DBPASS);
   // echo"ok ok ok ok ok";
}catch(PDOException $e){
    die($e->getMessage());
}