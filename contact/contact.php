
<div id="main">
      This is Contact... connection from a  contact page :)

      <h1> CONTACT </h1>
      <div id="form_location">
      <h2> Fill Up the form Below to contact uS:  </h2>
      <form name='contact-form'>
      <p></p>
      Name<br />
      <input class='contact-form-name' id='ContactForm1_contact-form-name' name='name' size='30' value='' type='text' />
      <p></p>
      Email
      <span style='font-weight: bolder; color:red;'>*</span><br />
      <input class='contact-form-email' id='ContactForm1_contact-form-email' name='email' size='30' value='' type='text' />
      <p></p>
      Message<span style='font-weight: bolder; color:red;'>*</span><br />
      <textarea class='contact-form-email-message' cols='25' id='ContactForm1_contact-form-email-message' name='email-message' rows='5'></textarea>
      <p></p>
      <input class='contact-form-button contact-form-button-submit' id='ContactForm1_contact-form-submit' value='Send' type='button' />
      <p></p>
      <div style='text-align: center; max-width: 222px; width: 100%'>
      <p class='contact-form-error-message' id='ContactForm1_contact-form-error-message'></p>
      <p class='contact-form-success-message' id='ContactForm1_contact-form-success-message'></p>
      </div>
      </form>
    </div>

    <div id="chat-bar" class="col-sm-12">
      <a href="<?php echo $domain_name.'/chatbot/chatbot.php'; ?>">
        <img src="<?php echo $domain_name.'/images/'; ?>/chat_bar.png"></a>
    </div>

</div>
