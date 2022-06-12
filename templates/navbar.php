
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GISS 2022</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" />
</head>
<nav class="sticky top-0 z-50 bg-white border-gray-200 px-2 sm:px-4 py-2.5">
<div class="container flex flex-wrap justify-between items-center mx-auto">
<a href="https://gisss.gamainovasi.com" class="flex items-center">
<img src="../assets/logo.png" class="mr-3 h-6 sm:h-9" alt="GamaInovasi Logo">
<span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Gama Inovasi</span>
</a>
<div class="flex md:order-2">
<a href= "https://forms.gle/oAKx9kdc1tUGJRmX8" target="_blank" type="button" class="text-white bg-gradient-to-r from-purple-500 to-cyan-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Register</a>
<button data-collapse-toggle="mobile-menu-4" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-4" aria-expanded="false">
<span class="sr-only">Open main menu</span>
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
<svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</button>
</div>
<div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-4">
<ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
<li>
<a href="https://gisss.gamainovasi.com" class="block py-2 pr-4 pl-3 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-gray-700 dark:focus:text-grey-600 dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent" aria-current="page">Home</a>
</li>
<li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-gray-700 dark:focus:text-grey-600 dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">About <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden bg-white divide-y divide-grey-700 rounded shadow w-44 dark:bg-white dark:divide-grey-700">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-700" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="./pages/information.php" class="block px-4 py-2 hover:bg-gray-50  dark:hover:bg-grey-700 dark:text-gray-700 dark:hover:text-grey-700 ">Information</a>
                  </li>
                  <li>
                    <a href="./pages/program.php" class="block px-4 py-2 hover:bg-gray-50  dark:hover:bg-grey-700 dark:text-gray-700 dark:hover:text-grey-700 ">Program</a>
                  </li>
                </ul>
            </div>
</li>
<li>
<a href="./pages/announcement.php" class="block py-2 pr-4 pl-3 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-gray-700 dark:focus:text-grey-600 dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent" aria-current="page">Announcement</a>
</li>
<li>
<a href="./pages/contact.php" class="block py-2 pr-4 pl-3 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-gray-700 dark:focus:text-grey-600 dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent" aria-current="page">Contact</a>
</li>
<li>
<a href="./pages/faq.php" class="block py-2 pr-4 pl-3 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-gray-700 dark:focus:text-grey-600 dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent" aria-current="page">FAQ</a>
</li>
</ul>
</div>
</div>
</nav>


  </body>
  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</html>
