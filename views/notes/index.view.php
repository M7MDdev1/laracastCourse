<?php require base_path("views/Partials/Header.php") ?>
 <?php require base_path("views/Partials/nav.php") ?>
 <?php require base_path("views/Partials/Title.php") ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">

      <ul class="list-disc">
      <?php foreach ($posts as $post) : ?>
        <a href="/Note?id=<?= $post['id']?>">
          <li><?= htmlspecialchars($post['title']) ?></li>
        </a>
        <?php endforeach ?>
    </ul>


    <a href="/Notes/Create" class="text-blue-500 block mt-11 ">Create a Note !</a>
    </div>


  </main>
  
  <?php require base_path("views/Partials/Foot.php") ?>
