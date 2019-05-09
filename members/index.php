<?php
$path = "/home1/dsp/html/nectar/";
$site_path = "/nectar/";

if($_SERVER['SERVER_NAME']=="nectar") {
	$path = "D:/Data/_school/nectar/dsp_nectar_web/web/";
	$site_path = "/";
}

$current_section = "members";
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
      <p class="cat_head_first">:: Members </p>
      <p class="proj_listtitle">Current Members</p>
      <p class="proj_abstract"><a href="http://www.dsp.utoronto.ca/~kostas/" target="_blank"><strong>Konstantinos N. Plataniotis</strong></a><br />
      Associate Professor, Dept. of Electrical and Computer Engineering </p>
      <p class="proj_abstract"><a href="http://www.dsp.utoronto.ca/~kmartin/" target="_blank"><strong>Karl Martin</strong></a><br />
      Ph.D. Candidate, Dept. of Electrical and Computer Engineering </p>
      <p class="proj_abstract"><a href="http://www.dsp.utoronto.ca/~azadeh/" target="_blank"><strong>Azadeh Kushki</strong></a><br />
Ph.D. Candidate, Dept. of Electrical and Computer Engineering </p>
      <p class="proj_abstract"><strong>Vishvajit Singh</strong><br />
Undergraduate Research Assistant, Division of Engineering Science </p>
      <p class="proj_abstract">&nbsp;</p>
      <p class="proj_listtitle">Past Members</p>
      <p class="proj_abstract"><strong>Rastislav Lukac</strong><br />
Postdoctoral Fellow, Dept. of Electrical and Computer Engineering </p>
      <p class="proj_abstract"><strong>Mazen Almaoui</strong><br />
        M.A.Sc. Graduate, Dept. of Electrical and Computer Engineering </p>
      <p class="proj_abstract"><strong>Mohammed Ajmal</strong><br />
M.A.Sc. Graduate, Dept. of Electrical and Computer Engineering </p>
      <p class="proj_abstract"><strong>Cindy Guo</strong><br />
Undergraduate Research Assistant, Division of Engineering Science </p>
      <p class="proj_abstract"><strong>Rasha Rashidi</strong><br />
      Undergraduate Research Assistant, American University of Beirut</p>
      <p class="proj_abstract"><strong>Stefan Gueorguiev</strong><br />
      Undergraduate Research Assistant, Dept. of Computer Science </p>
      <p class="proj_abstract"><strong>Sabrina Liao</strong><br />
      Undergraduate Research Assistant, Division of Engineering Science </p>
    </div>
<?php include($path . "include/right_col.php"); ?>    
<?php include($path . "include/footer.php"); ?>    
  </div>
</div>
</body>
</html>
