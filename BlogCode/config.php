<?php

$serverlocalhost = "localhost";
$username = "root";
$password = "";
$database = "blogdb";

$connection =mysqli_connect($serverlocalhost,$username,$password,$database);


if(!$connection){
  die("connect failed because: " .mysqli_connect_error());

}else{
  // echo "connection is successfull";
}

?>
