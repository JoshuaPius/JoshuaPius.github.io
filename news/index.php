<?php
$path = "/home1/dsp/html/nectar/";
$site_path = "/nectar/";

if($_SERVER['SERVER_NAME']=="nectar") {
	$path = "D:/Data/_school/nectar/dsp_nectar_web/web/";
	$site_path = "/";
}


$current_section = "news";
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
      <p class="cat_head_first">:: News</p>
      <p class="note">The items on this page represent the Multimedia Lab contributions to the <a href="http://www.nectar-research.net/news/" target="_blank">NECTAR News page</a>. Visit the <a href="http://www.nectar-research.net/news/" target="_blank">NECTAR News page</a> for all news related to NECTAR. </p>
      <p class="news_date">May 2 , 2006 </p>
      <p class="proj_listtitle">Secure Scalable Multimedia Streaming</p>
      <p class="news_authors"> Karl Martin, Cindy Guo, and Konstantinos N. Plataniotis</p>
      <p class="proj_description">There are two distinct trends emerging in the field of multimedia  communications. One is the need for content scalability to enable  Universal Multimedia Access (UMA) for varied devices and network  conditions. The other is the demand for end-to-end security (e.g.,  confidentiality and copyright protection), backed up by strong  encryption standards. Unfortunately, these two trends have  traditionally been considered to be in conflict with each other.<br />
        Content scaling is performed by a transcoding operation which requires  direct access to the content, ultimately compromising security.</p>
      <p class="proj_description">This  project, Secure Scalable Multimedia Streaming (SSMS), aims to address  this conflict by developing a framework for streaming scalable  multimedia, while providing end-to-end security. Previous work  performed by HP Labs addressed only secure scaling of video content;  SSMS applies the concept to various media, such as slides and  documents, as well as video. The framework relies on the content being  hierarchically structured using XML and appropriately described using  metadata. By encrypting the content, but keeping the structure and  metadata in clear-text, a transcoding server can scale the encrypted  content without having to decrypt it. Hence, only the receiver with the  correct decryption key can access the actual content. Furthermore, this  framework may enable complex security policies by matching an  encryption key hierarchy with the semantic hierarchy of the content.</p>
      <p class="proj_description">Currently,  basic framerate scalability of encrypted MPEG-4 (Part 2) video has been  implemented. An online proof-of-concept demo is linked at the bottom of  the project page. The next milestones are to implement secure, fully  scalable H.264 video (AKA MPEG-4 Part 10, or<br />
      AVC) and finally MS PowerPoint slides and XML-based documents.</p>
      <p align="center" class="proj_description"><img src="images/ssms.jpg" width="400" height="280" /></p>
      <p class="proj_description"><a href="../projects/ssms/index.php"><strong>Secure Scalable Multimeda Streaming Project Page &raquo;</strong></a></p>
      <p class="news_date">February 6, 2006 </p>
      <p class="proj_listtitle">SPIHT-based Coding of the Shape and Texture of Arbitrarily-Shaped Visual Objects</p>
      <p class="news_authors"> Karl Martin, Rastislav Lukac, and Konstantinos N. Plataniotis</p>
	  <a href="images/par_stspiht.jpg"><img src="images/par_stspiht_sm.jpg" width="150" height="100" border="0" class="figure_right" /></a>
      <p class="proj_description">This technical report describes our  ST-SPIHT object-based coding scheme which efficiently compresses the  shape and texture of arbitrarily shaped visual objects.  Arbitrarily-shaped visual objects are digital images which are not  necessarily rectangular in shape, allowing semantically meaningful  parts of a scene (e.g., a person's face) to be segmented and stored  separately. Next generation multimedia systems are expected to be  object-based, allowing a variety of new features for content  interaction and retrieval, as well as very low bit-rate transmission  (i.e., by only transmitting semantically meaningful portions of a  scene) targeted toward wireless devices.</p>
      <p class="proj_description"><a href="http://www.dsp.utoronto.ca/~kmartin/nectar/stspiht_nectar_techreport.pdf" target="_blank">Full document</a> &mdash; This technical report is the basis for a paper which will be published  in the IEEE Transactions on Circuits and Systems for Video Technology  journal.</p>
	  <p class="news_date">July 14 , 2005</p>
      <p class="proj_listtitle">Confidentiality of streamed images and video</p>
      <p class="news_authors"> Karl Martin and Konstantinos N. Plataniotis</p>
      <p class="proj_description">While many applications have authentication mechanisms, such as  passwords or biometrics, which prevent unauthorized access to the  service, they provide no assurance that the communications will be  confidential when data is transmitted over untrusted channels such as  the Internet and wireless networks. Confidentiality can only be ensured  through the use of encryption technologies. However, when streaming  images and video in real-time, encryption of the entire media stream  becomes too computationally complex. Most computational resources at  the server end are consumed for coding/compressing the media stream; at  the client end, computational resources are even more limited. To solve  this, we have developed a secure coder for still  images, based on the principle of partial encryption. Coding and  encryption are combined, requiring only a small percentage of the data  be encrypted (typically less than 1%). While the most important  information is encrypted, the nature of the scheme makes it very  difficult for the hacker to locate the unencrypted portion, thus making  the entire coded image secure.</p>
      <p class="proj_description"><img src="images/secure_coder_blog.jpg" width="454" height="168" /></p>
      <p class="proj_description">The above picture shows the  original image (left) and the decoded image without correct decryption  key (right). With the correct decryption key, the decoded image retains  its full quality without loss of coding efficiency. The scheme depends  on using a wavelet-based embedded image coder which results in a  data-dependent execution path when coding and decoding the image.</p>
      <p class="proj_description"><strong>Related Publications:</strong></p>
      <ul class="proj_description">
	  	<li>K. Martin, R. Lukac, K.N. Plataniotis, &quot;Efficient Encryption Of Compressed Color Images,&quot; proceedings of <em>IEEE International Symposium on Industrial Electronics - ISIE 2005</em>, June 2005.</li>
		<li>K. Martin, R. Lukac, K.N. Plataniotis, &quot;Efficient Encryption of Wavelet-Based Coded Color Images,&quot; <em>Pattern Recognition</em>, vol. 38, no. 7, pp. 1111-1115, July 2005.</li>
	  </ul>
    </div>
<?php include($path . "include/right_col.php"); ?>    
<?php include($path . "include/footer.php"); ?>    
  </div>
</div>
</body>
</html>
