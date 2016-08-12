<?php
$banner1 = '<a href="https://www.ncell.com.np/" target="_blank"><img src="ad4.png" alt="BANNER1_ALT" title="exam.ioe.edu.np"></a>';
$banners = array($banner1, $banner2, $banner3);
shuffle($banners);
?>

<div id="main">
<div>

  <?php print $banners[0] ?>
</div>
</div>
