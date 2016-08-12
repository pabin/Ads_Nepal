<?php

require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
$selected_page = 'contact_page';
?>
<?php
include $site_root."layouts/header.php";

 ?>



<div id="main">

       <div id="form_location">
      <h2> Eneter the Payment Details </h2><br/>
      <h4> Step 3 of 3 </h4>
      <form name='signup-form'>
      <p></p>
      Card Holder's Name
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='name'
      size='30' value='' type='text' />
      <p></p>

      Card Number
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='email'
      size='30' value='' type='text' />
      <p></p>
      Billing Address
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='mobile'
      size='30' value='' type='int' />
      <p></p>

      Expiry Date
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='mobile'
      size='30' value='' type='int' />
      <p></p>

            3 Digit Security number
            <span style='font-weight: bolder; color:red;'>*</span><br />
            <input class='contact-form-email' id='ContactForm1_contact-form-email' name='mobile'
            size='30' value='' type='int' />
            <p></p>
</form>
      <p></p>

            <form method="post" name="signup" action="payment.php">
              <input type="submit" name="submit" id="submit"  value="Submit" />
            </form
      </div>

    </div>
</div>

<?php
include $site_root."layouts/footer.php";

 ?>
