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
    <a class="navbar-brand" ><img src="bk.png" > </a>

  <div class="navbar-header">
    <ul class="nav navbar-nav">

        <li><a href="<?php echo $domain_name.'/publisheraccount/publisherhome.php'; ?>">Home </a></li>
        <li><a href="<?php echo $domain_name.'/publisheraccount/myads.php'; ?>">My ads</a></li>
        <li><a href="<?php echo $domain_name.'/publisheraccount/blockads.php'; ?>">Allow & Block Ads </a></li>
        <li><a href="<?php echo $domain_name.'/publisheraccount/publisherreports.php'; ?>">Performance Reports </a></li>
    </ul>
  </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $domain_name.'/publisheraccount/publisherreports.php'; ?>"><img src="settings.png"></a></li>
            <li><a href="<?php echo $domain_name.'/publisheraccount/publisherreports.php'; ?>"><img src="notification.png"></a></li>
            <li><a href="publisherlogout.php">LogOut <?php echo $login_session; ?></a></li>
        </ul>

  </div>
  </nav>
