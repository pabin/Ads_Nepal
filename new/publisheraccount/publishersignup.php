<?php

require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
$selected_page = 'contact_page';
?>
<?php
include $site_root."layouts/header.php";

 ?>



<div id="main">

       <div id="form_location">
      <h2> Fill Up following Details to apply for the Publisher Account  </h2>
      <form name='signup-form'>
      <p></p>
      Payee Name
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

      Website URL
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


      <input class='contact-form-button contact-form-button-submit' id='ContactForm1_contact-form-submit'
      value='Submit Application' type='button' />
      <p></p>
      </div>
      </form>>
    </div>
</div>

<?php
include $site_root."layouts/footer.php";

 ?>
