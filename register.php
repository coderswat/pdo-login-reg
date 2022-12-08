<?php
include('db.inc.php');
include('signup.inc.php');
include('signupcontr.inc.php');
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> Register </title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
<script>
 
</script>
</head>
<body class="dark:bg-gray-600" style="font-family: 'Poppins', sans-serif;">
<nav class="bg-white shadow-md border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#" class="flex items-center">
        <img src="http://aff.flashcash.in/logo.jpg" class="mr-3 h-9 sm:h-9 rounded-full" alt="Onx" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Registration</span>
    </a>
    <div class="flex md:order-2">
    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
</button>
    </div>
 
    <div class="hidden w-full md:block md:w-auto rounded" id="mobile-menu">
      <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
      </ul>
    </div>
  </div>
</nav>
<div class="p-2">
<br>
<div class="p-3 border border-gray-200 relative overflow-x-auto rounded shadow-md sm:rounded-lg">
<div class="mb-6">
</div>
<form class="mt-4" action="" method="post">
<div class="form-group mb-6">
<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enter Username</label>
<input type="text" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="exampleInput125" placeholder="Your Username" name="name">
</div>
<div class="form-group mb-6">
<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enter Email </label>
<input type="text" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="exampleInput125" placeholder="Enter Your Email" name="email">
</div>
<div class="form-group mb-6">
<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enter Password</label>
<input type="password" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="exampleInput125" placeholder="Enter Your Password " name="pass">
</div>
<div class="form-group mb-6">
<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm Password
<input type="text" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="exampleInput125" placeholder="Enter  Your Password Again" name="cpass">
</div>

<button type="submit" class="
    text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" name="submit">Register Now</button>
</form>
<p class="text-center mt-4 text-gray-500">Already have an account ? <a href="login.php" class="text-blue-500">Login Now</a></p>

</div>
<br>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$signup = new SignupContr($_POST['name'],$_POST['email'],$_POST['pass'],$_POST['cpass']);
$signup->signupUser();
echo "Register Success";
}
?>
 