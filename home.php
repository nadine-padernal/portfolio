<?php
error_reporting(0);
$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Porfolio</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php?mod=Home">School Works</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php?mod=Home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?mod=Cdemo">CSS</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="index.php?mod=SHm">SVG</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="index.php?mod=NHm">CANVAS</a>
		  </li>
		  <li class="nav-item">
            <a class="nav-link" href=""></a>
		  </li>
		  <li class="nav-item">
            <a class="nav-link" href="">
			<img src="images/user.png" alt="Trulli" width="25" height="25">
            </a>
		  </li>
        </ul>
      </div>
      </div>
  </nav>
  <div id="content">
  <h1> Landing Page </h1>
  </div>     
</body>
<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>