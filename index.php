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
		 <?php
		 switch ($module) {
      case 'Home':
				require_once 'home.php';
			break;
			 case 'Cdemo':
				require_once 'CSSTAB/cssdemo.php';
			break;
			 case 'CTr':
				require_once 'CSSTAB/css_translate.php';
      break;
      case 'CSk':
				require_once 'CSSTAB/css_skew.php';
      break;
      case 'CSc':
				require_once 'CSSTAB/css_scale.php';
      break;
      case 'CRt':
				require_once 'CSSTAB/css_rotate.php';
      break;
      case 'CLg':
				require_once 'CSSTAB/css_logo.php';
      break;
      case 'C2dM':
				require_once 'CSSTAB/2d_matrix.php';
      break;
      case 'C2dTi':
				require_once 'CSSTAB/2d_transi.php';
      break;
      case 'C3dM':
				require_once 'CSSTAB/3d_matrix.php';
      break;
      case 'C3dTi':
				require_once 'CSSTAB/3d_transi.php';
      break;
      case 'C3dTf':
				require_once 'CSSTAB/3d_transf.php';
      break;
      case 'SHm':
				require_once 'SVGTAB/svg_home.php';
      break;
      case 'NHm':
				require_once 'CNVTAB/cnv_home.php';
			break;
			default:
				require_once 'index.php?mod=Home';
			break;
      }
        ?>
</body>
<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>