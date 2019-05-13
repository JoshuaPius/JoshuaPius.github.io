  <div id="menu">
	<ul>
		<li <?php if($current_section=="home") {?> id="current_section" <?php } ?>><a href="<?php echo($site_path); ?>">HOME</a></li>
		<li <?php if($current_section=="news") {?> id="current_section" <?php } ?>><a href="<?php echo($site_path); ?>news/">NEWS</a></li>		
		<li <?php if($current_section=="projects") {?> id="current_section" <?php } ?>><a href="<?php echo($site_path); ?>projects/">PROJECTS</a></li>
		<li <?php if($current_section=="publications") {?> id="current_section" <?php } ?>><a href="<?php echo($site_path); ?>publications/">PUBLICATIONS</a></li>
		<li <?php if($current_section=="members") {?> id="current_section" <?php } ?>><a href="<?php echo($site_path); ?>members/">MEMBERS</a></li>
		<li  <?php if($current_section=="about") {?> id="current_section" <?php } ?>><a href="<?php echo($site_path); ?>about/">ABOUT</a></li>		
	</ul>
  </div>
