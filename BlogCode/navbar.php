<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body class="bg-gray-500">
  <nav class="bg-gray-700 flex md:flex-row  justify-between px-6 py-4 shadow-lg text-white">
    <div class="cursor-pointer">
        LOGO
    </div>
    <span class=" absolute right-[5%] md:hidden cursor-pointer">
      <i class="fa-solid fa-bars"></i>
      <i class="fa-solid fa-xmark hidden"></i>
    </span>

    <ul class="flex  md:flex-row flex-col  md:my-0 my-4 mr-[35%] md:mr-4 md:block  hidden  ">
      <li class="mx-4 md:my-0 my-2 md:inline hover:text-cyan-500 duration-500"><a href="index.php">Home</a></li>
      <li class="mx-4 md:my-0 my-2 md:inline hover:text-cyan-500 duration-500"><a href="services.php">Services</a></li>
      <li class="mx-4 md:my-0 my-2 md:inline hover:text-cyan-500 duration-500"><a href="contact.php">Contacts</a></li>
      <li class="mx-4 md:my-0 my-2 md:inline hover:text-cyan-500 duration-500"><a href="about.php">About</a></li>
      <li class="mx-4 md:my-0 my-2 md:inline hover:text-cyan-500 duration-500"><a href="post.php">
      <?php

        if(isset($_SESSION['loging_active'])){
          echo "Post";

        }
        ?>
        </a>
      </li>
      <li class="mx-4 md:my-0 my-2 md:inline hover:text-cyan-500 duration-500"><a href="logout.php">
      <?php

        if(isset($_SESSION['loging_active'])){
          echo "Logout";

        }else{
          echo "Login";
        }
        ?>
        </a>
      </li>
    </ul>
  </nav>

  <script>
    let list = document.querySelector("ul");
    let menu = document.querySelector(".fa-bars");
    let close = document.querySelector(".fa-xmark");

    menu.addEventListener("click",() => {
      list.classList.toggle("hidden")
      close.classList.remove("hidden")
      menu.classList.add("hidden")

    })
    close.addEventListener("click",() => {
      list.classList.toggle("hidden")
      close.classList.add("hidden")
      menu.classList.remove("hidden")

    })
  </script>
  
</body>
</html>