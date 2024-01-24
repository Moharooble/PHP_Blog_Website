<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body >


<div class="bg-gray-100 h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded shadow-md w-96">
    <?php
    include 'config.php';
    if(isset($_POST['submit'])){
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql= "SELECT * FROM users WHERE username='$username' and password='$password'";
        $result = mysqli_query($connection,$sql);

        if(mysqli_num_rows($result) > 0){
            $_SESSION['loging_active'] = [$userName,$password];
            header("location: index.php");
            exit();
  
          }else {
            $_SESSION['errors'] = "login qaldan ayaa lasoo galiyaya";
            echo "<div class='alert alert-danger' role='alert'>
                    Login kaagu waa qalad fadlan iska sax!
                  </div>";
          
            
          }
        }
    

    ?>

    <h2 class="text-2xl font-semibold mb-6">Login</h2>

    <!-- Login Form -->
    <form action="" method="POST">
        <!-- Email Input -->
        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-600">Email</label>
            <input type="text" id="username" name="username" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Password Input -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Submit Button -->
        <button type="submit" name="submit" class="bg-blue-500 text-white p-2 rounded-md w-full">Login</button>
    </form>
</div>
</div>

</body>
</html>
