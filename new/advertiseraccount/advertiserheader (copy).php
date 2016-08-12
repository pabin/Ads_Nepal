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
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Publisher Account </a>

      <div class="navbar-header navbar-right">

      <ul class="nav navbar-nav">
        <li><a href="<?php echo $domain_name.'/advertiseraccount/advertiserhome.php'; ?>">Home </a></li>
        <li><a href="<?php echo $domain_name.'/advertiseraccount/advertiserhome.php'; ?>">Budget</a>
        <li><a href="<?php echo $domain_name.'/advertiseraccount/advertiserhome.php'; ?>">Reports </a></li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Setting <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>


        <li><a href="<?php echo $domain_name.'/advertiseraccount/advertiserhome.php'; ?>">Logout </a></li>
        <h4 align="center">  click here to <a href="advertiserlogout.php">LogOut</a> </h4>

      </ul>
      <script src="js/bootstrap.min.js"> </script>

  </div>
  </div>
