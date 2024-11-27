<?php require "Partials/Header.php" ?>
 <?php require "Partials/nav.php" ?>

 <?php require "Partials/Title.php" ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">

      <ul class="list-disc">
      <?php foreach ($posts as $post) : ?>
        <a href="/Note?id=<?= $post['id']?>">
          <li><?= $post['title']?></li>
        </a>
        <?php endforeach ?>
    </ul>
    </div>


  </main>
  
  <?php require "Partials/Foot.php" ?>
