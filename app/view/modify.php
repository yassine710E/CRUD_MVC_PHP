<?php
$title="modify Page";

//require the layout/header page ti avoid DRY

require "layout/header.php";

?>
<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-end mx-auto p-4">


    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="/public/home" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="/public/add" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Add Student</a>
        </li>
        <li>
          <a href="/public/logout" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<form  class="max-w-sm mx-auto" action=""  method="post">
  <div class="mb-5">
    <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
    <input type="text" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your Fisrt name" name="nom" value="<?= $data->nom ?>" />
  </div>
  <div class="mb-5">
    <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
    <input type="text" id="prenom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your Last name" name="prenom" value="<?= $data->prenom ?>" />
  </div>
  <div class="mb-5">
    <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">age</label>
    <input type="number" id="number" name="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your Age" value="<?= $data->age ?>" />
  </div>
  
  <button type="submit" name="go" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">MODIFY</button>
</form>

<?php
//require the layout/footer page ti avoid DRY

require "layout/footer.php";
?>