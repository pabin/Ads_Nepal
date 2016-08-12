<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";

 ?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $selected_page ?> </title>
             <link href="<?php echo $domain_name.$css_path; ?>" media="all" rel="stylesheet" type="text/css" />

  </head>
<body>
      <div id="header">
       <div id="top_menu">
      <ul>
          <div id="site_title">
            Ads Nepal Private Limited <br/>

          </div>
          <div id="subtitle">
          <li>Biggest Online Ad Network</li>
        </div>
          <li><a href="<?php echo $domain_name.'/advertiseraccount/'; ?>">Advertiser Account </a></li>
        <li><a href="<?php echo $domain_name.'/publisheraccount/'; ?>">Publisher Account </a></li>
        <li><a href="<?php echo $domain_name.'/login/'; ?>">Site Login </a></li>

      </ul>

      </div>

      </div>

      <div class="navigation_menu" id="navigation_menu">
           <ul>
              <li><a href="<?php echo $domain_name; ?>">HOME </a></li>
              <li><a href="<?php echo $domain_name.'/about/'; ?>" >ABOUT US </a></li>
              <li><a href="<?php echo $domain_name.'/contact/'; ?>" >CONTACT US </a></li>
              <li><a href="<?php echo $domain_name.'/publisher/'; ?>" >PUBLISHER </a></li>
              <li><a href="<?php echo $domain_name.'/advertiser/'; ?>">ADVERTISER </a></li>
              <li><a href="<?php echo $domain_name.'/privacypolicy/'; ?>">PRIVACY POLICY </a></li>

          </ul>
       </div>
