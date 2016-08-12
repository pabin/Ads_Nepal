<?php

require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
$selected_page = 'contact_page';
?>
<?php
include $site_root."layouts/header.php";

 ?>



<div class="bg-image2">

       <div id="form_location">
      <h2> Enter How you want to Invest for your Business  </h2><br/>
      <h4> Step 2 of 3 </h4>
      <form name='signup-form'>
      <p></p>
      Daily Ad Budget
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='name'
      size='30' value='' type='text' />
      <p></p>

      Total Reach per Day
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='email'
      size='30' value='' type='text' />
      <p></p>
      Cost Per Click
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='mobile'
      size='30' value='' type='int' />
      <p></p>

      Campaign End Date
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='mobile'
      size='30' value='' type='int' />
      <p></p>

      <p></p>
</form>
      <form method="post" name="signup" action="payment.php">
        <input type="submit" name="submit" id="submit"  value="Payment Method" />
      </form
      </div>

    </div>
</div>

<?php
include $site_root."layouts/footer.php";

 ?>
