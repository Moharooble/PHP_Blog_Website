
<?php 
  session_start();
  include 'navbar.php' ?>

<div class=" my-8 flex flex-col justify-center items-center text-white mt-24">
    
<div class="bg-gray-800 p-3 rounded-md shadow-md max-w-md w-full ">
  <?php
  include 'function.php';
  if(isset($_POST['send'])){
    $title = $_POST['title'];
    $message = $_POST['message'];

    createPost($title,$message);


  }



  ?>

<h2 class="text-2xl font-semibold mb-4 text-white">NEW POST</h2>

<form action="#" method="POST">
    <!-- Your form fields go here -->
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-white">Title</label>
        <input type="text" id="title" name="title" class="mt-1 p-2 w-full  rounded-md focus:outline-none bg-gray-500">
    </div>

    <div class="mb-4">
        <label for="message" class="block  text-sm font-medium mb-2 text-white">Message</label>
        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2  rounded-md focus:outline-none focus:border-blue-500 bg-gray-500"></textarea>
    </div>

    <!-- Add more form fields as needed -->

    <button type="submit" name="send" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 w-full">Submit</button>
</form>




</div>
</div>