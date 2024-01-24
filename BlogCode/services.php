
<?php 
  session_start();
  include 'navbar.php' ?>
  <div class="">
    <header class="mt-4 text-white text-center py-4">
        <h1 class="text-3xl font-bold">Our Services</h1>
    </header>
    
    <section class="container mx-auto mt-8 ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Card 1 -->
            <div class="bg-gray-700 p-4 rounded-lg shadow-md">
                <img class="mb-4 rounded-md h-[210px] w-full" src="./images/service1.jpg" alt="Service 1 Image">
                <h2 class="text-xl font-bold mb-2 text-white">Service 1</h2>
                <p class="text-white">Description of Service 1.</p>
            </div>

            <!-- Service Card 2 -->
            <div class="bg-gray-700 p-4 rounded-lg shadow-md">
                <img class="mb-4 rounded-md h-[210px] w-full" src="./images/service2.jpg" alt="Service 2 Image">
                <h2 class="text-xl font-bold mb-2 text-white">Service 2</h2>
                <p class="text-white">Description of Service 2.</p>
            </div>

            <!-- Service Card 3 -->
            <div class="bg-gray-700 p-4 rounded-lg shadow-md">
                <img class="mb-4 rounded-md h-[210px] w-full" src="./images/service3.jpg" alt="Service 3 Image">
                <h2 class="text-xl font-bold mb-2 text-white">Service 3</h2>
                <p class="text-white">Description of Service 3.</p>
            </div>
        </div>
    </section>
  </div>
  <footer class="text-center py-4 mt-24 bg-gray-800 w-full text-white relative bottom-0 ">
        <p>&copy; Developer: Eng Rooble</p>
    </footer>
  

</body>
</html>
