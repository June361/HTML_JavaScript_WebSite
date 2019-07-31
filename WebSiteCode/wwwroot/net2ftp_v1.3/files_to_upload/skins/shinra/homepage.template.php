<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/shinra/homepage.template.php begin -->

	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- HEADER -->
		<div id="header" style="height: 180px;">

			<img id="logo" src="skins/shinra/img/logo.png" alt="net2ftp" />

			<!-- Navigation -->
			<ul id="nav" class="sf-menu">
				<li><a href="index.php?state=login">HOME</a></li>
				<li <?php echo $menu_item_1; ?>><a href="<?php echo $menu_url_1; ?>">SCREENSHOTS</a></li>
				<li <?php echo $menu_item_2; ?>><a href="#">FEATURES</a>
					<ul>
						<li><a href="<?php echo $menu_url_2a; ?>"><span> User</span></a></li>
						<li><a href="<?php echo $menu_url_2b; ?>"><span> Administrator</span></a></li>
					</ul>
				</li>
				<li <?php echo $menu_item_3; ?>><a href="<?php echo $menu_url_3; ?>">DOWNLOAD</a></li>
				<li <?php echo $menu_item_4; ?>><a href="#">HELP</a>
					<ul>
						<li><a href="<?php echo $menu_url_4a; ?>"><span> User</span></a></li>
						<li><a href="<?php echo $menu_url_4b; ?>"><span> Administrator</span></a></li>
					</ul>
				</li>
				<li <?php echo $menu_item_5; ?>><a href="<?php echo $menu_url_5; ?>">ABUSE</a></li>
				<li <?php echo $menu_item_6; ?>><a href="#">PRIVACY</a>
					<ul>
						<li><a href="<?php echo $menu_url_6a; ?>"><span> Privacy policy</span></a></li>
						<li><a href="<?php echo $menu_url_6b; ?>"><span> Why we ask for your email</span></a></li>
						<li><a href="<?php echo $menu_url_6c; ?>"><span> Right of access and erasure requests</span></a></li>
					</ul>
				</li>
				<li <?php echo $menu_item_7; ?>><a href="<?php echo $menu_url_7; ?>">DISCLAIMER</a></li>
			</ul>
			<!-- ENDS Navigation -->
			
			<!-- Breadcrumb-->
			<div id="breadcrumbs">
				<a title="Home" href="index.php">Home</a>
				<?php echo $title; ?>
			</div>

			<!-- ENDS Breadcrumb-->	
				
		</div>
		<!-- ENDS HEADER -->
			
		<!-- MAIN -->
		<div id="main">
			
			<!-- content -->
			<div id="content">
				
				<!-- title -->
				<div id="page-title">
					<span class="title"><?php echo $title; ?></span>
					<span class="subtitle"><?php echo $subtitle; ?></span>
				</div>
				<!-- ENDS title -->

				<?php echo $content; ?>
				
<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/footer.template.php"); ?>

<!-- Template /skins/shinra/homepage.template.php end -->
