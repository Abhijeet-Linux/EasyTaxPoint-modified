<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

  <!-- menu scripts -->
  <script>
function clicked(){
    document.getElementById('menu').classList.toggle('hidden');
}

function view(){
    document.getElementById('menu').classList.remove('hidden');
}

  </script>
  
</head>
<body>

<!-- nav -->
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
      <div class="flex justify-start lg:w-0 lg:flex-1">
        <a href="index.php">
          <span class="sr-only">Workflow</span>
          <img class="h-8 w-auto sm:h-10" src="tax logo2.png" alt="">
        </a>
      </div>
      <div class="-mr-2 -my-2 md:hidden">
        <button id="on_btn" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false" onclick="view()">
          <span class="sr-only">Open menu</span>
          <!-- Heroicon name: outline/menu -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
      <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
        <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900"> Sign in </a>
        <a href="#" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"> Sign up </a>
      </div>
    </div>
  </div>

  <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
  <div id="menu" class="hidden absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
      <div class="pt-5 pb-6 px-5">
        <div class="flex items-center justify-between">
          <div>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
          </div>
          <div class="-mr-2">
            <button id="close" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" onclick="clicked()">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="mt-6">
          
        </div>
      </div>
      <div class="py-6 px-5 space-y-6">
        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Pricing </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Docs </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Help Center </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Guides </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Events </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Security </a>
        </div>
        <div>
          <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"> Sign up </a>
          <p class="mt-6 text-center text-base font-medium text-gray-500">
            Existing customer?
            <a href="#" class="text-indigo-600 hover:text-indigo-500"> Sign in </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>






<section class='text-gray-600 body-font'>
      <div class='container px-5 py-24 mx-auto'>
        <div class='flex flex-col text-center w-full mb-20'>
          <h2 class='text-xs text-indigo-500 tracking-widest font-medium title-font mb-1'>Make your life easier</h2>
          <h1 class='sm:text-3xl text-2xl font-medium title-font text-gray-900'>EasyTaxPoint Blog</h1>
        </div>
        </div>
  </section>
  
<?php

require_once "blogs.php";

$sql = "SELECT * FROM `articles`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

if ($num>0) {
  // $rows = mysqli_fetch_array($result);
  // echo $rows['title'] ;
  while($row = $result->fetch_assoc())
  {
      echo "
          <center>
          <div class='p-4 md:w-1/3'>
            <div class='flex rounded-lg h-full bg-gray-100 p-8 flex-col'>
              <div class='flex items-center mb-3'>
                <div class='w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0'>
                  <svg fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-5 h-5' viewBox='0 0 24 24'>
                    <path d='M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2'></path>
                    <circle cx='12' cy='7' r='4'></circle>
                  </svg>
                </div>
                <h2 class='text-gray-900 text-lg title-font font-medium'>" .$row['title'] ." | Title</h2>
              </div>
              <div class='flex-grow'>
                <p class='leading-relaxed text-base'>" . $row['description']. "</p>
                <a class='mt-3 text-indigo-500 inline-flex items-center'>Learn More
                  <svg fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 ml-2' viewBox='0 0 24 24'>
                    <path d='M5 12h14M12 5l7 7-7 7'></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>

        </center>
      
    " ;
          // $row["Roll_No"]. " - Name: " .
          // $row['title'] . '| Title'
          // $row["City"]. " | Age: " . 
          // $row["Age"]. "<br>";
  }
}

?>
</body>
</html>

