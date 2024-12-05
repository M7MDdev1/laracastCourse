<?php require base_path("views/Partials/Header.php") ?>
 <?php require base_path("views/Partials/nav.php") ?>
 <?php require base_path("views/Partials/Title.php") ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">
      <a href="/Notes?id=2">Go Back ?</a>

      <p><?= htmlspecialchars($post['title']) ?></p>

      <form method="post">
        <input type="hidden" value="<?= $_GET['id'] ?>" name="id">
        <button class="text-red-500 text-xs mt-3">Delete</button>
      </form>
    </div>


  </main>
  
  <?php require base_path("views/Partials/Foot.php") ?>
