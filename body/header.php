<?php
	require_once 'menu/Database.php';
	require_once 'menu/Menu.php';

	$dbcon = Database::getDb();

	$b = new Menu();

	$mymenu = $b->getAllMenus(Database::getDb());

?>

<header>
	<nav>
		<div class="wrapper">
			<div id="top-logo">
				<a id="logo" href="index.php"><img src="images/Service-logo.png" id="logo-image"></a>
			</div>
			<div></div>
			<div class="deep-wrapper">
				<div id="Blog">
					<div class="box"><a href="pages/blogs/index.php">Blogs</a></div>
				</div>
				<div id="#Professional">
					<div class="box"><a href="#">Become A Professional</a></div>
				</div>
				<div id="SignUp">
					<div class="box" ><a href="#">Sign Up</a></div>
				</div>
				<div id="Login">
					<div class="box"><a href="#">Login</a></div>
				</div>
				<div id="Search">
					<input type="text" name="Search" placeholder="Search for a Service"><input type="submit" value="Search">
				</div>
			</div>
		</div>
	</nav>
	<nav>
		<div class="menu-wrapper">
		<?php foreach($mymenu as $menu){
		echo "" . 
			"<div class='menu-box'><a href='#'>" . $menu->name . "</a></div>" ;
		}
		?>
		</div>
	</nav>		
</header>
