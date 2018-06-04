<html>
  <head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <script src="assets/js/script.js" type="text/javascript"></script>
  </head>
  <body>
    <?php
   if (isset($_GET['success'])) : ?>
       <div class="alert alert-success" role="alert" style="color: green;opacity: 0.9">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
         <strong>SUCCESS!</strong> <?=($_GET['success']);?>
       </div>
   <?php endif;?>
   <?php
if (isset($_GET['error'])) : ?>
    <div class="alert alert-danger" role="alert" style="color: red;opacity: 0.9">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>WARNING!</strong> <?=($_GET['error']);?>
    </div>
<?php endif;?>
  </body>
    <?php require_once('routes.php') ?>
</html>
