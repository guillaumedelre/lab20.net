<?php require_once "meta.php"; ?>
<body>

	<!-- Begin Header -->
	<div class="header-wrapper">
		<div class="header"> 
			<!-- Begin Logo -->
			<div class="logo"> <a href="http://lab20.net/">lab20.net</a></div>
			<!-- End Logo --> 
			<!-- Begin Menu -->
			<?php require_once "menu.php"; ?>
			<!-- End Menu --> 
		</div>
	</div>
	<!-- End Header --> 

	<?php require_once CURRENT_PAGE.".php"; ?>

	<?php require_once "footer.php"; ?>