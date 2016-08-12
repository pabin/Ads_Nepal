<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";

 ?>

<html>
  <head>
        <title><?php echo $selected_page ?> </title>
             <link href="<?php echo $domain_name.$css_path; ?>" media="all" rel="stylesheet" type="text/css" />
             <link href="<?php echo $domain_name.$bootstrap_path; ?>" media="all" rel="stylesheet" type="text/css" />

  </head>
<body>
<nav class="navbar navbar-default " role="navigation">
  <div class="container-fluid">
    <a class="navbar-brand" >ADVERTISER</a>

  <div class="navbar-header">
    <ul class="nav navbar-nav">

        <li><a href="<?php echo $domain_name.'/advertiseraccount/advertiserhome.php'; ?>">Home </a></li>
        <li><a href="<?php echo $domain_name.'/advertiseraccount/advertiserhome.php'; ?>">Campaigns</a></li>
        <li><a href="<?php echo $domain_name.'/advertiseraccount/advertiserhome.php'; ?>">Reports </a></li>
        <li><a href="<?php echo $domain_name.'/advertiseraccount/advertiserhome.php'; ?>">Tools </a></li>
    </ul>
  </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $domain_name.'/advertiseraccount/advertiserhome.php'; ?>"><img src="settings.png"></a></li>
            <li><a href="<?php echo $domain_name.'/advertiseraccount/advertiserhome.php'; ?>"><img src="notification.png"></a></li>
            <li><a href="publisherlogout.php">LogOut <?php echo $login_session; ?></a></li>
        </ul>

  </div>
  </nav>
