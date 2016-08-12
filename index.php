  <?php
      require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
      require_once $_SERVER['DOCUMENT_ROOT']."/php"."/js/javascript.js";




      $selected_page = 'home_page';


          include $site_root."layouts/header.php";

          include $site_root."home.php";

          include $site_root."layouts/footer.php";
  ?>
