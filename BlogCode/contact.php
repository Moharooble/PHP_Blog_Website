
<?php 
  session_start();
  include 'navbar.php' ?>

<div class=" my-8 flex flex-col justify-center items-center text-white  ">
    
<div class="bg-gray-800 p-3 rounded-md shadow-md max-w-md w-full ">

<h2 class="text-2xl font-semibold mb-4 text-white">Contact Us</h2>

<form action="#" method="post">
    <!-- Your form fields go here -->
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-white">Name</label>
        <input type="text" id="name" name="name" class="mt-1 p-2 w-full  rounded-md focus:outline-none bg-gray-500">
    </div>

    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-white">Email</label>
        <input type="email" id="email" name="email" class="mt-1 p-2 w-full  rounded-md focus:outline-none bg-gray-500">
    </div>

    <div class="mb-4">
        <label for="message" class="block  text-sm font-medium mb-2 text-white">Message</label>
        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2  rounded-md focus:outline-none focus:border-blue-500 bg-gray-500"></textarea>
    </div>

    <!-- Add more form fields as needed -->

    <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Submit</button>
</form>

<div class="mt-6">
    <p class="">Connect with us on social media:</p>
    <div class="flex mt-2">
        <!-- Font Awesome Icons for Facebook and WhatsApp -->
        <a href="#" class="text-blue-500 hover:text-blue-700 mr-4">
            <i class="fab fa-facebook-square text-lg"></i>
        </a>
        <a href="#" class="text-green-500 hover:text-green-700">
            <i class="fab fa-whatsapp-square text-lg"></i>
        </a>
    </div>
</div>

</div>
</div>