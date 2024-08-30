<?php
$title="Home Page";

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


<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <!-- Set equal width for each column -->
                <th scope="col" class="w-1/4 px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Nom
                </th>
                <th scope="col" class="w-1/4 px-6 py-3">
                    Prenom
                </th>
                <th scope="col" class="w-1/4 px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Age
                </th>
                <th scope="col" class="w-1/4 px-6 py-3">
                    Options
                </th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $obj) : ?>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="w-1/4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800"><?= $obj->nom ?></th>
                <td class="w-1/4 px-6 py-4"><?= $obj->prenom ?></td>
                <td class="w-1/4 px-6 py-4 bg-gray-50 dark:bg-gray-800"><?= $obj->age ?></td>
                <td class="w-1/4 px-6 py-4">
                    <button 
                        type="button" 
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        onclick="window.location.href='/public/delete/<?= $obj->id ?>';">
                        Delete
                    </button>
                    <button 
                        type="button" 
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        onclick="window.location.href='/public/modify/<?= $obj->id ?>';">
                        Modify
                    </button>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>



<?php
//require the layout/footer page ti avoid DRY

require "layout/footer.php";
?>


