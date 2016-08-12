<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";

 ?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $selected_page ?> </title>
             <link href="<?php echo $domain_name.$bootstrap_path; ?>" media="all" rel="stylesheet" type="text/css" />
             <link href="<?php echo $domain_name.$css_path; ?>" media="all" rel="stylesheet" type="text/css" />



  </head>
<body >
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">

              <a href="<?php echo $domain_name; ?>">
                <img src="<?php echo $domain_name.'/images/'; ?>/site-logo.png"></a>


        <div class="navbar-header navbar-right">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo $domain_name.'/publisheraccount/'; ?>">PUBLISHER  </a></li>
              <li><a href="<?php echo $domain_name.'/advertiseraccount/'; ?>">ADVERTISER  </a></li>

              <li><a href="<?php echo $domain_name.'/publisher/'; ?>" >AD1 </a></li>
              <li><a href="<?php echo $domain_name.'/advertiser/'; ?>">AD2 </a></li>
              <li><a href="<?php echo $domain_name.'/privacypolicy/'; ?>">AD3 </a></li>

              <li><a href="<?php echo $domain_name.'/login/'; ?>" class="btn btn-primary" role="button">SIGN IN</a></li>




            </ul>
          </div>
        </div>
      </nav>
