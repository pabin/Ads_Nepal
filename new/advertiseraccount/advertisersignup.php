<?php

require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
$selected_page = 'contact_page';
?>
<?php
include $site_root."layouts/header.php";

 ?>



<div id="main">

       <div id="form_location">
      <h2> Enter Following Details and Start Growing Your Business </h2><br/>
      <h4> Step 1 of 3 </h4>

      <form name='signup-form'>
      <p></p>
      Business Name
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='name'
      size='30' value='' type='text' />
      <p></p>

      Email
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='email'
      size='30' value='' type='text' />
      <p></p>
      Mobile No.
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='mobile'
      size='30' value='' type='int' />
      <p></p>


      Address Line 1
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='mobile'
      size='30' value='' type='int' />
      <p></p>
      Address Line 2
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='mobile'
      size='30' value='' type='int' />
      <p></p>

      Business Description<span style='font-weight: bolder; color:red;'>*</span><br />
      <textarea class='contact-form-email-message' cols='25' id='ContactForm1_contact-form-email-message' name='email-message' rows='5'></textarea>
      <p></p>
      <p></p>
      </form>
      <form method="post" name="signup" action="investment.php">
        <input type="submit" name="submit" id="submit"  value="Investment Method" />

      </div>
      </form>
    </div>
</div>

<?php
include $site_root."layouts/footer.php";

 ?>
