<?php require "Partials/Header.php" ?>
 <?php require "Partials/nav.php" ?>

 <?php require "Partials/Title.php" ?>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">

  <h1 class="text-3xl">Create Note !</h1>

  <form  method="post">
    <textarea id="title" name="title"><?= $_POST['title'] ?? "" ?></textarea>
    <?php if(isset($error)) :?>
      <p class="mt-5 text-red-500"><?= $error ?></p>
      <?php endif ?>
    <button class=" p-3 text-white font-bold block bg-blue-600 rounded-full ">Save</button>
  </form>

    </div>
    

  
  <?php require "Partials/Foot.php" ?>
