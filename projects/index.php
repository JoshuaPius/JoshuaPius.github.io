<?php
$path = "/home1/dsp/html/nectar/";
$site_path = "/nectar/";

if($_SERVER['SERVER_NAME']=="nectar") {
	$path = "D:/Data/_school/nectar/dsp_nectar_web/web/";
	$site_path = "/";
}

$current_section = "projects";
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
      <p class="cat_head_first">:: Projects</p>
      <p class="proj_listtitle"><a href="isa/">Interactive Presentation Slide Adaptation</a></p>
      <p class="proj_abstract"> This project involves the creation of an interactive slide adaptation system. The system uses a web browser as the client display software. Interactivity is provided through user activated hyperlinks which are used to retrieve and expand content on-demand.</p>
      <p class="proj_listtitle"><a href="summarization/">Universal Multimedia Access and Semantic Summarization for Presentations</a></p>
      <p class="proj_abstract"> A novel summarization scheme is proposed
        which combines information from multiple sources such as audio data and presentation slides to
      improve accessibility of presentation archives for users.</p>
      <p class="proj_listtitle"><a href="respeed/">Time Stretching an Audio Signal</a></p>
      <p class="proj_abstract">A demonstration of <i>time stretching</i> an audio signal, i.e. changing the playback speed without altering the pitch of the signal.</p>
      <p class="proj_listtitle"><a href="uma/">Universal Multimedia Access in ePresence</a></p>
      <p class="proj_abstract">A database-driven transcoding engine which transcodes video content and manipulates the <a href="http://epresence.tv/" target="_blank">ePresence</a> screen-layout based on received metadata (e.g., client preferences and capabilities, communication channel properties, etc.).</p>
      <p class="proj_listtitle"><a href="ssms/">Secure Scalable Multimedia Streaming</a></p>
      <p class="proj_abstract">System for transcoding encrypted multimedia content (video, audio, slides, etc.) without requiring decryption. Full scalability can be achieved while maintaining end-to-end security. Current focus is on scaling encrypted MPEG-4 video stream.</p>
      <p class="proj_listtitle">Shape-Adaptive Image Coding</p>
      <p class="proj_abstract">A codec for compressing arbitrarily-shaped still visual objects in support of application-driven transcoding.</p>
      </div>
    <?php include($path . "include/right_col.php"); ?>    
<?php include($path . "include/footer.php"); ?>    
  </div>
</div>
</body>
</html>
