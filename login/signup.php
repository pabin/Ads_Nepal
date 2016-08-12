<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
include $site_root."layouts/header.php";
?>






<div id="main">
     <h3 align="center"> Enter The Details Below to SignUp: </h3>

<div id="form_location">
 <form name='signup-form' action="up.php" method="post">
 <p></p>
 First Name
 <span style='font-weight: bolder; color:red;'>*</span><br />
 <input  name='first_name'
 size='30' value='' type='text' />
 <p></p>
 Last Name
 <span style='font-weight: bolder; color:red;'></span><br />
 <input  name='last_name'
 size='30' value='' type='text' />
 <p></p>
 Email
 <span style='font-weight: bolder; color:red;'>*</span><br />
 <input name='user_email'
 size='30' value='' type='text' />
 <p></p>
 Mobile No.
 <span style='font-weight: bolder; color:red;'>*</span><br />
 <input name='mobile_no'
 size='30' value='' type='int' />
 <p></p>
 Username
 <span style='font-weight: bolder; color:red;'>*</span><br />
 <input  name='username'
 size='30' value='' type='text' />
 <p></p>
 Password
 <span style='font-weight: bolder; color:red;'>*</span><br />
 <input name='password'
 size='30' value='' type='password' />
 <p></p>
 Password Again
 <span style='font-weight: bolder; color:red;'>*</span><br />
 <input name='password_again'
 size='30' value='' type='password' />
 <p></p>

 <input value='SignUp' type='submit' />
 <p></p>
 </div>
 </form>
</div>
</div>




<?php
         include $site_root."layouts/footer.php";
?>
