<?php
$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
?>
<html>
<head>
  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="content">
  <div class="sidenav">
  <a href="index.php?mod=Cdemo">CSS Demo</a>
  <a href="#" style="cursor: default;">2D Transform</a>
    <a href="index.php?mod=CTr"><li>translate()</li></a>
    <a href="index.php?mod=CSk"><li>skew()</li></a>
    <a href="index.php?mod=CSc"><li>scale()</li></a>
    <a href="index.php?mod=CRt"><li>rotate()</li></a>
    <a href="index.php?mod=CLg"><li>CSS logo</li></a>
  <a href="index.php?mod=C2dM">2D Matrix</a>
  <a href="index.php?mod=C2dTi">2D Transition</a>
  <a href="index.php?mod=C3dTf">3D Transform</a>
  <a class="current" href="index.php?mod=C3dM">3D Matrix</a>
  <a href="index.php?mod=C3dTi">3D Transition</a>
  </div>
  <div class="main">
    <a href="CSSTAB/camping" class="button2">CLE1: Culminating Learning Evidence (Prelim)</a>
  </div>
  <div class="aboutexp">
  </div>
</div>
</body>
</html>