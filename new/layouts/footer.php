<div id="footer">
  Ads Nepal Private Limited  <br/>
  &copy; CopyRight <?php echo date("Y",time()); ?>
</div>

</body>
</html>

<?php
//5. Close connection
if (isset($connection)){
mysql_close($connection);
}
 ?>
