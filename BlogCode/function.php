<?php

include 'config.php';

function readinfo(){
  global $connection;

  $sql = "SELECT * FROM infotb";
  $rusalt = mysqli_query($connection,$sql);

  if(mysqli_num_rows($rusalt) > 0){
    while ($row = mysqli_fetch_assoc($rusalt)){
      $title = $row['title'];
      $body = $row['body'];

      echo "

      <div class='bg-gray-700 m-4 rounded p-5 flex flex-col  items-center  text-white hover:bg-gray-800 duration-500'>
      <div class='mb-3 p-1'>
        <h1 class='text-xl font-bold'>$title</h1>
      </div>
      <p>$body</p>
    </div>
      
      ";

    }
  }else {
    echo "waxba mahayo";
  }
}


function createPost($title,$message){
  global $connection;
  $sql = "INSERT INTO infotb(title,body) VALUES('$title','$message')";
  $result = mysqli_query($connection,$sql);
  
}



?>