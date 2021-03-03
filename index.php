
<?php require 'templates/main-header.php'; ?>

<header>
  <?php require 'templates/navigation-fixed.php'; ?>
  <?php require 'templates/logo.php'; ?>
  <?php require 'templates/navigation-mobile.php'; ?>
  <?php require 'templates/navigation-main.php'; ?>
</header>

<main class="main-container">
  <h1 class="visually-hidden">Во свете Библии</h1>
    <?php require 'templates/sidebar-left.php'; ?>
    <?php require 'templates/main-content.php'; ?>
    <?php require 'templates/sidebar-right.php'; ?>
</main>

<?php require 'templates/main-footer.php'; ?>
