<?php

try{

  $conn = new PDO("mysql:host=localhost;dbname=mini_project" , "root" , "");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
  echo "Database connection failed due to following errors : " + $e->getMessage();
}



?>
