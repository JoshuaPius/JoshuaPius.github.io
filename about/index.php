<?php
$path = "/home1/dsp/html/nectar/";
$site_path = "/nectar/";

if($_SERVER['SERVER_NAME']=="nectar") {
	$path = "D:/Data/_school/nectar/dsp_nectar_web/web/";
	$site_path = "/";
}

$current_section = "about";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nectar Theme 3 - Multimedia Laboratory</title>
<link href="<?php echo($site_path); ?>styles/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo($site_path); ?>styles/presentation.css" rel="stylesheet" type="text/css" />
<?php include($path . "include/parse_css.php"); ?>
</head>
<body>
<div id="main_container">
<?php include($path . "include/header.php"); ?>
<?php include($path . "include/menu.php"); ?>
  <div id="col_container" align="left">
    <div id="left_col" class="column">
      <p class="cat_head_first">:: About </p>
	  <p class="proj_listtitle"><a href="http://www.nectar-research.net/" target="_blank">NECTAR</a></p>
	  <p class="proj_description">The Network for Effective Collaboration Technologies through Advanced Research (NECTAR) is a NSERC network of Canada's leading university researchers in human-computer interaction (HCI) and computer-supported cooperative work (CSCW). Participants come from 6 universities and are world-class experts in these fields.</p>
	  <p class="proj_description"><a href="http://www.nectar-research.net/" target="_blank">Read more at the main NECTAR site...</a></p>
	  <p class="proj_listtitle"><a href="http://www.nectar-research.net/theme-three.php" target="_blank">Theme 3: The Extended Presentation Room </a></p>
	  <p class="proj_description">The presentation is a collaborative activity in which one person formally communicates to many others information in the form of briefings or lectures. It supports small group presentations such as seminars or spontaneous talks.</p>
	  <p class="proj_description"><a href="http://www.nectar-research.net/theme-three.php" target="_blank">Read more at the main NECTAR site...</a></p>
	  <p class="proj_listtitle"><a href="http://www.dsp.utoronto.ca" target="_blank">Multimedia Laboratory  </a></p>
	  <p class="proj_description">The Multimedia Laboratory at the University of Toronto is part of the Communications Group at the Edward S. Rogers Sr. Department of Electrical and Computer Engineering. Our Laboratory has been at the forefront of the signal and image processing field. Specifically, research has been focused on the areas of nonlinear signal and image processing, multichannel image processing, morphological filters, neural networks and image and video coding.</p>
	  <p class="proj_description"><a href="http://www.dsp.utoronto.ca" target="_blank">Read more at the main Multimedia Laboratory site...</a></p>
    </div>
<?php include($path . "include/right_col.php"); ?>    
<?php include($path . "include/footer.php"); ?>    
  </div>
</div>
</body>
</html>
