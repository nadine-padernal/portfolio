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
  <a href="#">2D Transform</a>
    <a href="index.php?mod=CTr"><li>translate()</li></a>
    <a href="index.php?mod=CSk"><li>skew()</li></a>
    <a href="index.php?mod=CSc"><li>scale()</li></a>
    <a href="index.php?mod=CRt"><li>rotate()</li></a>
    <a class="current" href="index.php?mod=CLg"><li>CSS logo</li></a>
    <a href="index.php?mod=C2dM">2D Matrix</a>
  <a href="index.php?mod=C2dTi">2D Transition</a>
  <a href="index.php?mod=C3dTf">3D Transform</a>
  <a href="index.php?mod=C3dM">3D Matrix</a>
  <a href="index.php?mod=C3dTi">3D Transition</a>
  </div>
  <div class="main">
    <!-- FIRST WORK -->
    <p class="codepen" data-height="407" data-theme-id="light" data-default-tab="css,result" data-user="nadine-padernal" data-slug-hash="JjXOMVz" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Logo">
      <span>See the Pen <a href="https://codepen.io/nadine-padernal/pen/JjXOMVz">
      Logo</a> by nadine-padernal (<a href="https://codepen.io/nadine-padernal">@nadine-padernal</a>)
      on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
    <!-- SECOND WORK --><br>
    <p class="codepen" data-height="383" data-theme-id="light" data-default-tab="css,result" data-user="nadine-padernal" data-slug-hash="XWdEzvJ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Animated Pinwheel Logo">
    <span>See the Pen <a href="https://codepen.io/nadine-padernal/pen/XWdEzvJ">
       Animated Pinwheel Logo</a> by nadine-padernal (<a href="https://codepen.io/nadine-padernal">@nadine-padernal</a>)
       on <a href="https://codepen.io">CodePen</a>.</span>
      </p>
    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
    <!-- THIRD WORK--><br>
    <p class="codepen" data-height="346" data-theme-id="light" data-default-tab="css,result" data-user="nadine-padernal" data-slug-hash="MWyqrQq" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Crystal Ball Logo">
    <span>See the Pen <a href="https://codepen.io/nadine-padernal/pen/MWyqrQq">
     Crystal Ball Logo</a> by nadine-padernal (<a href="https://codepen.io/nadine-padernal">@nadine-padernal</a>)
     on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
  </div>
  <div class="aboutexp">
  <h1> CSS Logo Works </h1>
  </div> 
</div>
</body>
</html>