<?php require('partials/head.php') ?>
<?php require('partials/header.php') ?>

<main class="page-content">
  <header class="page-header">
    <div class="inner-column">

      <h1> <?= $title ?> </h1>
      
      <p>In tellus integer feugiat <a href="contact.php">contact</a>, varius
	morbi enim nunc, faucibus a pellentesque sit amet, porttitor
	eget dolor morbi? Mauris pellentesque pulvinar pellentesquer
	habitant morbi tristique senectus et netus et malesuada.</p>
    </div>
  </header>

  <section class="page-section diptych">
    <div class="inner-column">
      <?php include('graphic-diptych.php'); ?>
    </div>
  </section>

</main>

<?php require('partials/footer.php') ?>
